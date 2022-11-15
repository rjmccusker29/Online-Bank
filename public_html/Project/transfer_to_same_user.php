<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in(true)) {
    flash("Must be logged in to see this page", "warning");
}

if (isset($_POST["amount"]) && isset($_POST["account_src"]) && isset($_POST["account_dest"])) {
    if (!is_numeric($_POST["amount"])) {
        flash("Input must be a number", "warning");
    } else if (strval($_POST["amount"] < 1)) {
        flash("Must transfer at least 1", "warning");
    } else if (strlen($_POST["reason"]) > 100) {
        flash("Reason cannot be more than 100 characters", "warning");
    } else if ($_POST["account_src"] == $_POST["account_dest"]) {
        flash("Cannot transfer to the same account", "warning");
    } else {
        $amount = strval($_POST["amount"]);
        $memo = $_POST["reason"];

        get_account($_POST["account_dest"]);
        $account_dest_id = get_user_account_id();
        $account_dest_type = get_account_type();
        $account_dest_balance = get_account_balance();

        get_account($_POST["account_src"]);
        $account_src_id = get_user_account_id();
        if ($account_dest_type == 4) {
            if (get_account_balance() + $account_dest_balance > 0) {
                flash("Cannot transfer more than loan balance. Loan balance: " . (-1 * $account_dest_balance), "warning");
            } else if (get_account_balance() < $amount) {
                flash("Cannot transfer more than the account balance", "danger");
            } else {
                do_transaction($amount, "transfer", $account_src_id, $account_dest_id, $memo);
                flash("Successful transfer", "success");
            }
        } else if (get_account_balance() < $amount) {
            flash("Cannot transfer more than the account balance", "warning");
        } else {
            do_transaction($amount, "transfer", $account_src_id, $account_dest_id, $memo);
            flash("Successful transfer", "success");
        }
    }
}

$query = "SELECT account_number, account_type, balance, is_active, frozen FROM Accounts where user_id = :userid";
$db = getDB();
$stmt = $db->prepare($query);
try {
    $stmt->execute([":userid" => get_user_id()]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    flash("There was a problem finding your accounts", "danger");
}
?>

<h1>Transfer</h1>
<form method="POST">
    <div>
        <label for="account">Account Source</label>
        <select id="account_src" name="account_src">
            <?php foreach ($results as $result) : ?>
                <?php if ($result["account_type"] != 4 && $result["is_active"] == 1 && $result["frozen"] == 0) : ?>
                    <option value=<?php se($result, "account_number"); ?>><?php se($result, "account_number"); ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="account">Account Destination</label>
        <select id="account_dest" name="account_dest">
            <?php foreach ($results as $result) : ?>
                <?php if ($result["is_active"] == 1 && $result["frozen"] == 0) : ?>
                    <option value=<?php se($result, "account_number"); ?>><?php se($result, "account_number"); ?></option>
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
    <input type="submit" value="Make Transfer" />
</form>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>