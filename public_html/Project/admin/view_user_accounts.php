<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}

if (isset($_POST["btn_transac"])) {
    $account_number = $_POST["btn_transac"];
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
} else if (isset($_POST["btn_freeze"])) {
    $an = $_POST["btn_freeze"];

    $checkfreeze_query = "SELECT frozen FROM Accounts WHERE account_number = :an";
    $db = getDB();
    $checkfreeze_stmt = $db->prepare($checkfreeze_query);
    try {
        $checkfreeze_stmt->execute([":an" => $an]);
        $checkfreeze_result = $checkfreeze_stmt->Fetch(PDO::FETCH_ASSOC);
        $freeze_status = $checkfreeze_result["frozen"];
        if ($freeze_status == 1) {
            $newstatus = 0;
        } else {
            $newstatus = 1;
        }

        $freeze_query = "UPDATE Accounts SET frozen = :frozen WHERE account_number = :an";
        $db = getDB();
        $freeze_stmt = $db->prepare($freeze_query);

        try {
            $freeze_stmt->execute([":frozen" => $newstatus, ":an" => $an]);
            flash("Status changed successfuly", "success");
        } catch (Exception $e) {
            flash("There was a problem changing frozen status", "danger");
        }
    } catch (Exception $e) {
        flash("There was an issue finding account information", "danger");
    }
}

$query = "SELECT account_number, frozen FROM Accounts WHERE user_id = :uid";
$db = getDB();
$stmt = $db->prepare($query);
try {
    $stmt->execute([":uid" => $_SESSION["viewing_user"]["id"]]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    flash("There was a problem finding the accounts associated with this user", "danger");
}

?>



<div>
    <p>Viewing Accounts For User: <?php echo $_SESSION["viewing_user"]["firstname"] . " " . $_SESSION["viewing_user"]["lastname"]; ?></p>
    <p>User ID: <?php echo $_SESSION["viewing_user"]["id"]; ?></p>
</div>

<table>
    <thead>
        <th>Account Number</th>
        <th>Frozen</th>
        <th>Freeze/Unfreeze</th>
    </thead>
    <tbody>

        <?php foreach ($results as $result) : ?>
            <tr>
                <td>
                    <form method="POST">
                        <input type="submit" name="btn_transac" value=<?php se($result, "account_number"); ?> />
                    </form>
                </td>
                <td><?php $frozen = se($result, "frozen", "", false);
                    if ($frozen == 1) {
                        echo "true";
                    } else {
                        echo "false";
                    }
                    ?></td>
                <td>
                    <form method="POST">
                        <input type="submit" value=<?php se($result, "account_number"); ?> name="btn_freeze" />
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>

<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>