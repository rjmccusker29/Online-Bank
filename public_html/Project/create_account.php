<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div><a href="create_checking_account.php" id="dash">Create Checking Account</a></div>
<div><a href="create_savings_account.php" id="dash">Create Savings Account</a></div>

<?php

is_logged_in(true);
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>