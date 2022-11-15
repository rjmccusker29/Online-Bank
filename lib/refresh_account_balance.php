<?php

function refresh_account_balance()
{
    if (is_logged_in()) {
        //cache account balance via RM_Gem_History history
        $query = "UPDATE Accounts set balance = (SELECT IFNULL(SUM(balance_change), 0) from Transactions WHERE account_src = :src) where id = :src";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":src" => get_user_account_id()]);
            get_account(get_account_number()); //refresh session data
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("Error refreshing balance", "danger");
        }
        $query = "UPDATE Accounts set balance = (SELECT IFNULL(SUM(balance_change), 0) from Transactions WHERE account_src = :src) where id = :src";
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":src" => -1]);
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("Error refreshing world balance", "danger");
        }
    }
}
