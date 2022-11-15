<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div><a href="transfer_to_same_user.php" id="dash">Transfer between your accounts</a></div>
<div><a href="transfer_to_another_user.php" id="dash">Transfer to another user</a></div>

<?php

is_logged_in(true);
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>