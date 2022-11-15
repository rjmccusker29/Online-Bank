<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}

function tryNewAccNumber($prefix, $uid)
{
    $prefix++;
    $acc_number = strval($prefix);
    $zeros = 12 - strlen($acc_number) - strlen($uid);
    if ($zeros < 1) {
        flash("Somehow we ran out of account numbers", "danger");
        exit();
    }
    for ($i = 0; $i < $zeros; $i++) {
        $acc_number = $acc_number . "0";
    }
    $acc_number = $acc_number . $uid;
    newQuery($uid, $acc_number, $prefix);
}
function newQuery($uid, $acc_number, $prefix)
{
    try {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Accounts (user_id, account_number, account_type) VALUES (:userid, :acc_number, :acc_type)");
        $stmt->execute([":userid" => $uid, ":acc_number" => $acc_number, ":acc_type" => $_POST["account_type"]]);
        flash("Account created successfully", "success");
    } catch (Exception $e) {
        tryNewAccNumber($prefix, $uid);
    }
}

if (isset($_POST["btn"])) {
    $uid = $_SESSION["viewing_user"]["id"];
    $prefix = 0;
    tryNewAccNumber($prefix, $uid);
}




?>

<div>
    <p>Creating account for: <?php echo $_SESSION["viewing_user"]["firstname"] . " " . $_SESSION["viewing_user"]["lastname"]; ?></p>
    <p>User ID: <?php echo $_SESSION["viewing_user"]["id"]; ?></p>
</div>

<form method="POST">
    <div>
        <label for="account_type">Account Type</label>
        <select name="account_type" id="account_type">
            <option value=1>Checking</option>
            <option value=3>Savings</option>
        </select>
    </div>
    <input type="submit" name="btn" />
</form>



<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>