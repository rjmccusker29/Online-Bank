<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in(true)) {
    flash("Not logged in", "warning");
}

if (isset($_POST["submit"])) {
    if (get_account_balance() == 0) {
        $query = "UPDATE Accounts SET is_active = false WHERE id = :aid";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":aid" => get_user_account_id()]);
            redirect("accounts.php");
        } catch (Exception $e) {
            flash("There was an error closing your account", "danger");
        }
    } else {
        flash("Account balance must be 0. Current account balance is " . get_account_balance(), "warning");
    }
}

?>


<h1>Close Account</h1>
<p>Close account? Account balance must be 0.</p>
<form method="POST">
    <input type="submit" value="Close Account" name="submit" />
</form>


<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>