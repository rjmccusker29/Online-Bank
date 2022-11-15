<?php
require(__DIR__ . "/../../partials/nav.php");

?>
<h1>Create Checking Account</h1>
<form method="POST">
    <div>
        <label for="deposit">Deposit</label>
        <input type="text" name="deposit" id="deposit" required />
    </div>
    <input type="submit" name="submit" value="Create New Checking Account" />
</form>

<?php

is_logged_in(true);

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
        $stmt = $db->prepare("INSERT INTO Accounts (user_id, account_number, account_type) VALUES (:userid, :acc_number, 1)");
        $stmt->execute([":userid" => $uid, ":acc_number" => $acc_number]);
        get_account($acc_number);
    } catch (Exception $e) {
        tryNewAccNumber($prefix, $uid);
    }
}

if (isset($_POST["submit"])) {
    $deposit = intval($_POST["deposit"]);
    if ($deposit < 5) {
        flash("Initial deposit must be at least $5", "warning");
    } else {
        $uid = $_SESSION["user"]["id"];
        $prefix = 0;
        tryNewAccNumber($prefix, $uid);

        do_transaction($deposit, "deposit", -1, get_user_account_id(), "initial deposit");
        flash("Account created successfully", "success");

        header("Location: accounts.php");
        exit;
    }
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>