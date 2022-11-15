<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}

$result = false;

if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && se($_POST, "firstname", "", false) != "" && se($_POST, "lastname", "", false) != "") {
    $firstname = se($_POST, "firstname", "", false);
    $lastname = se($_POST, "lastname", "", false);

    $query = "SELECT id FROM Users WHERE first_name = :firstname AND last_name = :lastname";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":firstname" => $firstname, ":lastname" => $lastname]);
        $result = $stmt->Fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $id = $result["id"];
            $_SESSION["viewing_user"]["id"] = $id;
            $_SESSION["viewing_user"]["firstname"] = $firstname;
            $_SESSION["viewing_user"]["lastname"] = $lastname;
        } else {
            flash("Could not find a user with that name", "warning");
        }
    } catch (Exception $e) {
        flash("There was an issue fetching account");
    }
}

if (isset($_POST["btn_deact"])) {
    $deact_query = "UPDATE Users SET is_active = false WHERE id = :id";
    $db = getDB();
    $deact_stmt = $db->prepare($deact_query);
    try {
        $deact_stmt->execute([":id" => $_SESSION["viewing_user"]["id"]]);
        flash("User deactivated", "success");
    } catch (Exception $e) {
        flash("There was an issue deactivating the account", "danger");
    }
}

?>
<form method="POST">
    <div>
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" />
    </div>
    <div>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" />
    </div>
    <input type="submit" value="Find User" />
</form>

<?php if ($result) : ?>
    <div>
        <p>First Name: <?php echo $firstname; ?></p>
        <p>Last Name: <?php echo $lastname; ?></p>
        <a href="view_user_accounts.php">View User's Accounts</a>
        <br>
        <a href="admin_create_account.php">Create New Account</a>
        <form method="POST">
            <input type="submit" value="Deactivate User" name="btn_deact" />
        </form>
    </div>
<?php endif; ?>

<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>