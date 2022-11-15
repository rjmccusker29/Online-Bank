<?php
function get_account($acc_number = "")
{
    if (is_logged_in()) {
        //let's define our data structure first
        //id is for internal references, account_number is user facing info, and balance will be a cached value of activity
        $account = ["id" => -1, "account_number" => "", "balance" => 0, "account_type" => 1];
        //this should always be 0 or 1, but being safe
        $query = "SELECT id, account_number, account_type, balance from Accounts where account_number = :an LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":an" => $acc_number]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$result) {
                //account doesn't exist, create it
                try {
                    //my table should automatically create the account number so I just need to assign the user
                    $query = "INSERT INTO Accounts (user_id, account_type) VALUES (:uid, 1)";
                    $user_id = get_user_id(); //caching a reference
                    $stmt = $db->prepare($query);
                    $stmt->execute([":uid" => $user_id]);
                    flash("Welcome! Your account has been created successfully", "success");
                    $account["id"] = $db->lastInsertId();
                    //this should mimic what's happening in the DB without requiring me to fetch the data
                    $account["account_number"] = str_pad($user_id, 12, "0", STR_PAD_LEFT);
                } catch (PDOException $e) {
                    flash("An error occurred while creating your account", "danger");
                    error_log(var_export($e, true));
                }
            } else {
                //$account = $result; //just copy it over
                $account["id"] = $result["id"];
                $account["account_number"] = $result["account_number"];
                $account["balance"] = $result["balance"];
                $account["account_type"] = $result["account_type"];
            }
        } catch (PDOException $e) {
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
        $_SESSION["user"]["account"] = $account; //storing the account info as a key under the user session
        //Note: if there's an error it'll initialize to the "empty" definition around line 161

    } else {
        flash("You're not logged in", "danger");
    }
}
