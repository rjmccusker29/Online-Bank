<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in(true)) {
    flash("Must be logged in to see this page", "warning");
}

if (isset($_POST["amount"]) && isset($_POST["account_src"]) && isset($_POST["account_dest_ln"]) && isset($_POST["account_dest_number"])) {
    if (!is_numeric($_POST["amount"])) {
        flash("Amount must be a number", "warning");
    } else if (intval($_POST["amount"] < 1)) {
        flash("Must transfer at least 1", "warning");
    } else if (strlen($_POST["reason"]) > 100) {
        flash("Reason cannot be more than 100 characters", "warning");
    } else if (!is_numeric($_POST["account_dest_number"])) {
        flash("First 4 digits of destination account number must be a number", "warning");
    } else if (strlen($_POST["account_dest_number"]) != 4) {
        flash("Must input the first 4 digits of destination account number", "warning");
    } else {
        $amount = intval($_POST["amount"]);
        $memo = $_POST["reason"];
        $account_dest_number = ($_POST["account_dest_number"]);
        $account_dest_ln = se($_POST, "account_dest_ln", false, false);

        $query = "SELECT id FROM Users WHERE last_name = :ln";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":ln" => $account_dest_ln]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                $account_dest_user_id = strval($result["id"]);

                $an = $account_dest_number . "%" . $account_dest_user_id;

                /*
                for ($i = 0; $i < 8 - strlen($account_dest_user_id); $i++) {
                    $account_dest_number = $account_dest_number . "#";
                }*/


                //$account_dest_number = $account_dest_number . $account_dest_user_id;
                $query = "SELECT id, account_type, balance, is_active, frozen FROM Accounts WHERE account_number LIKE :an";
                $db = getDB();
                $stmt = $db->prepare($query);
                try {
                    $stmt->execute([":an" => $an]);
                    $result2 = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($result2) {
                        if ($result2["is_active"] == 1 && $result2["frozen"] == 0) {
                            $account_dest_id = $result2["id"];
                            get_account($_POST["account_src"]);
                            $account_src_id = get_user_account_id();

                            if ($result2["account_type"] == 4) {
                                $loan_balance = $result2["balance"];
                                if (get_account_balance() + $loan_balance > 0) {
                                    flash("Cannot transfer more than the loan balance. Loan balance: " . ($loan_balance * (-1)), "warning");
                                }
                            } else if (get_account_balance() < $amount) {
                                flash("Cannot transfer more than the account balance", "danger");
                            } else {
                                do_transaction($amount, "transfer", $account_src_id, $account_dest_id, $memo);
                                flash("Successful transfer", "success");
                            }
                        } else {
                            flash("The destination account is closed or frozen", "warning");
                        }
                    } else {
                        flash("No account exists under that account number", "danger");
                    }
                } catch (PDOException $e) {
                    flash("Error finding account", "danger");
                }
            } else {
                flash("Couldn't find an account with that last name", "danger");
            }
        } catch (PDOException $e) {
            flash("An error occurred finding the account", "danger");
            error_log(var_export($e, true));
        }
    }
}

$query = "SELECT account_number, is_active, account_type, frozen FROM Accounts where user_id = :userid";
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
        <label for="account_src">Account Source</label>
        <select id="account_src" name="account_src">
            <?php foreach ($results as $result) : ?>
                <?php if ($result["is_active"] == 1 && $result["account_type" != 4] && $result["frozen"] == 0) : ?>
                    <option value=<?php se($result, "account_number"); ?>><?php se($result, "account_number") ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="account_dest_ln">Last Name</label>
        <input type="text" name="account_dest_ln" id="account_dest_ln" required />
    </div>
    <div>
        <label for="account_dest_number">First 4 Digits of Destination Account Number</label>
        <input type="text" name="account_dest_number" id="account_dest_number" required />
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