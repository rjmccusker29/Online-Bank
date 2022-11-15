<?php


/**
 * Points should be passed as a positive value.
 * $losing should be where the points are coming from
 * $gaining should be where the points are going
 */
function do_transaction($amount, $reason, $losing = -1, $gaining = -1, $details = "")
{
    //I'm choosing to ignore the record of 0 point transactions
    if ($amount > 0) {
        $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
            VALUES (:acs1, :acd1, :bc1, :tt,:m, :et1), 
            (:acs2, :acd2, :bc2, :tt, :m, :et2)";
        //I'll insert both records at once, note the placeholders that are kept the same and the ones changed.
        $params[":acs1"] = $losing;
        $params[":acd1"] = $gaining;
        $params[":tt"] = $reason;
        $params[":m"] = $details;
        $params[":bc1"] = ($amount * -1);

        $params[":acs2"] = $gaining;
        $params[":acd2"] = $losing;
        $params[":bc2"] = $amount;


        $db = getDB();
        $prestmt = $db->prepare("SELECT balance, account_number FROM Accounts WHERE id = :id");
        try {
            $prestmt->execute([":id" => $losing]);
            $result = $prestmt->fetch(PDO::FETCH_ASSOC);
            $account_number_losing = $result["account_number"];
            $params[":et1"] = $result["balance"] - $amount;
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error finding balance 1", "danger");
        }
        $prestmt = $db->prepare("SELECT balance, account_number FROM Accounts WHERE id = :id");
        try {
            $prestmt->execute([":id" => $gaining]);
            $result = $prestmt->fetch(PDO::FETCH_ASSOC);
            $account_number_gaining = $result["account_number"];
            $params[":et2"] = $result["balance"] + $amount;
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error finding balance 2", "danger");
        }


        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            //Only refresh the balance of the user if the logged in user's account is part of the transfer
            //this is needed so future features don't waste time/resources or potentially cause an error when a calculation
            //occurs without a logged in user
            if ($losing == get_user_account_id()) {
                refresh_account_balance();
                get_account($account_number_gaining);
                refresh_account_balance();
                get_account($account_number_losing);
            }
            if ($gaining == get_user_account_id()) {
                refresh_account_balance();
                get_account($account_number_losing);
                refresh_account_balance();
                get_account($account_number_losing);
            }
            return true;
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error transfering", "danger");
        }
    }
    return false;
}
