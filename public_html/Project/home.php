<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Dashboard</h1>
<div><a href="create_account.php" id="dash">Create Account</a></div>
<div><a href="accounts.php" id="dash">My Accounts</a></div>
<div><a href="deposit.php" id="dash">Deposit</a></div>
<div><a href="withdraw.php" id="dash">Withdraw</a></div>
<div><a href="transfer.php" id="dash">Transfer</a></div>
<div><a href="profile.php" id="dash">My Profile</a></div>
<div><a href="loan.php" id="dash">Take out a Loan</a></div>


<?php
/*if (is_logged_in()) {
    echo "Welcome home, " . get_user_email();
    //comment this out if you don't want to see the session variables
    //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
} else {
    echo "You're not logged in";
}*/
is_logged_in(true);
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>