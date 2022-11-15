<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in(true)) {
    flash("Must be logged in to see this page", "warning");
}

if (isset($_POST["amount"]) && isset($_POST["account"])) {
    if (!is_numeric($_POST["amount"])) {
        flash("Input must be a number", "warning");
    } else if (strval($_POST["amount"] < 1)) {
        flash("Must withdraw at least 1", "warning");
    } else if (strlen($_POST["reason"]) > 100) {
        flash("Reason cannot be more than 100 characters", "warning");
    } else {
        $amount = strval($_POST["amount"]);
        $memo = $_POST["reason"];
        $an = $_POST["account"];
        get_account($an);
        if (get_account_balance() < $amount) {
            flash("Cannot withdraw more than the account balance", "danger");
        } else {
            do_transaction($amount, "withdrawal", get_user_account_id(), -1, $memo);
            flash("Successful withrawal", "success");
        }
    }
}

$query = "SELECT account_number, account_type, is_active, frozen FROM Accounts where user_id = :userid";
$db = getDB();
$stmt = $db->prepare($query);
try {
    $stmt->execute([":userid" => get_user_id()]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    flash("There was a problem finding your accounts", "danger");
}
?>

<h1>Withdraw</h1>
<form method="POST">
    <div>
        <label for="account">Account</label>
        <select id="account" name="account">
            <?php foreach ($results as $result) : ?>
                <?php if ($result["account_type"] != 4 && $result["is_active"] == 1 && $result["frozen"] == 0) : ?>
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
    <input type="submit" value="Make Withdrawal" />
</form>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>