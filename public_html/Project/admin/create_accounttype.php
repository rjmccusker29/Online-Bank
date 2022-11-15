<?php

require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}

if (isset($_POST["name"]) && isset($_POST["description"])) {
    $name = se($_POST, "name", "", false);
    $desc = se($_POST, "description", "", false);
    if (empty($name)) {
        flash("Name is required", "warning");
    } else {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Account_Types (name, description, is_active) VALUES(:name, :desc, 1)");
        try {
            $stmt->execute([":name" => $name, ":desc" => $desc]);
            flash("Successfully created role $name!", "success");
        } catch (PDOException $e) {
            if ($e->errorInfo[1] === 1062) {
                flash("A role with this name already exists, please try another", "warning");
            } else {
                flash(var_export($e->errorInfo, true), "danger");
            }
        }
    }
}

?>
<h1>Create Account Type</h1>
<form method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required />
    </div>
    <div>
        <label for="d">Description</label>
        <textarea type="text" id="d" name="description"></textarea>
    </div>
    <input type="submit" value="Create Account Type" />
</form>

<?php
require_once(__DIR__ . "/../../../partials/flash.php");
?>