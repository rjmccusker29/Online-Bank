<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}

$results = false;
if (isset($_POST["btn_acc"])) {
    $account_number = $_POST["btn_acc"];
    $_SESSION["viewing_user"]["account_number"] = $account_number;


    $account_id_query = "SELECT id FROM Accounts WHERE account_number = :an";
    $db = getDB();
    $account_id_stmt = $db->prepare($account_id_query);
    try {
        $account_id_stmt->execute([":an" => $account_number]);
        $account_id_result = $account_id_stmt->Fetch(PDO::FETCH_ASSOC);
        $_SESSION["viewing_user"]["account_id"] = $account_id_result["id"];
        redirect("admin/admin_view_transactions.php");
    } catch (Exception $e) {
        flash("There was a problem finding that account", "danger");
    }
}

if (isset($_POST["account_number"]) && se($_POST, "account_number", "", false) != "") {
    $an = "%" . se($_POST, "account_number", "", false) . "%";

    $query = "SELECT account_number FROM Accounts WHERE account_number LIKE :an";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":an" => $an]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        flash("There was an issue searching for the account", "danger");
    }
}


?>


<form method="POST">
    <div>
        <label for="account_number">Account Number</label>
        <input type="text" name="account_number" id="account_number" />
    </div>
    <input type="submit" value="submit" name="submit" />
</form>
<?php if ($results) : ?>
    <table>
        <thead>
            <th>Account Number</th>
        </thead>
        <tbody>
            <?php foreach ($results as $result) : ?>
                <tr>
                    <td>
                        <form method="POST">
                            <input type="submit" value=<?php se($result, "account_number"); ?> name="btn_acc" />
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php endif; ?>

<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>