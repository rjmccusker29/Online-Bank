<?php

require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in(true)) {
    flash("Must be logged in to see this page", "warning");
}

function tryNewAccNumber($prefix, $uid)
{
    $prefix++;
    $acc_number = strval($prefix);
    $zeros = 12 - strlen($acc_number) - strlen($uid);
    if ($zeros < 1) {
        flash("Somehow we ran out of account numbers", "danger");
        exit();
    }
    for ($i = 0; $i < $zeros; $i++) {
        $acc_number = $acc_number . "0";
    }
    $acc_number = $acc_number . $uid;
    newQuery($uid, $acc_number, $prefix);
}
function newQuery($uid, $acc_number, $prefix)
{
    try {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Accounts (user_id, account_number, account_type) VALUES (:userid, :acc_number, 4)");
        $stmt->execute([":userid" => $uid, ":acc_number" => $acc_number]);
        get_account($acc_number);

        $db = getDB();
        $query = "INSERT INTO SystemProperties (account_id) VALUES (:aid)";
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":aid" => get_user_account_id()]);
        } catch (Exception $e) {
            flash("There was an issue establishing interest", "danger");
        }
    } catch (Exception $e) {
        tryNewAccNumber($prefix, $uid);
    }
}

if (isset($_POST["amount"])) {
    $amount = intval($_POST["amount"]);
    $reason = se($_POST, "reason", "", false);
    if ($amount < 500) {
        flash("Loan must be at least $500", "warning");
    } else {
        $uid = get_user_id();
        $prefix = 0;
        tryNewAccNumber($prefix, $uid);
        $dest_number = $_POST["account_dest"];

        $db = getDB();
        $query = "SELECT id FROM Accounts WHERE account_number = :an";
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":an" => $dest_number]);
            $result = $stmt->Fetch(PDO::FETCH_ASSOC);
            $dest_id = $result["id"];

            do_transaction($amount, "transfer", get_user_account_id(), $dest_id);
            flash("Loan created succesfully", "success");
            header("Location: accounts.php");
            exit;
        } catch (Exception $e) {
            flash("There was a problem finding the destination account", "danger");
        }
    }
}

$query = "SELECT account_number, is_active, frozen FROM Accounts where user_id = :userid";
$db = getDB();
$stmt = $db->prepare($query);
try {
    $stmt->execute([":userid" => get_user_id()]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    flash("There was a problem finding your accounts", "danger");
}
?>

<h1>Take out a Loan</h1>
<form method="POST">
    <div>
        <label for="account">Account Destination</label>
        <select id="account_dest" name="account_dest">
            <?php foreach ($results as $result) : ?>
                <?php if ($result["is_active"] == 1 && $result["frozen"] == 0) : ?>
                    <option value=<?php se($result, "account_number"); ?>><?php se($result, "account_number") ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="amount">Amount</label>
        <input type="text" name="amount" id="amount" required />
    </div>
    <div>
        <label for="reason">Reason</label>
        <textarea type="text" name="reason" id="reason"></textarea>
    </div>
    <input type="submit" value="Create Loan" />
</form>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>