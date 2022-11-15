<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in(true)) {
    flash("Not logged in", "warning");
}
//handle the toggle first so select pulls fresh data

if (isset($_POST["click"])) {
    get_account($_POST["click"]);
    header("Location: transactions.php");
    exit;


    //header("Location: transactions.php");
    //exit;
}


$query = "SELECT account_number, account_type, modified, balance, id, is_active FROM Accounts WHERE user_id = :userid";
$db = getDB();
$stmt = $db->prepare($query);

try {
    $stmt->execute([":userid" => get_user_id()]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    flash("Issue finding accounts", "danger");
}

?>
<h1>List Accounts</h1>
<table>
    <thead>
        <th>Account Number</th>
        <th>Account Type</th>
        <th>Balance</th>
        <th>Modified</th>
        <th>APY</th>
        <th>Select</th>
    </thead>
    <tbody>
        <?php foreach ($results as $result) : ?>
            <?php if ($result["is_active"]) : ?>
                <tr>
                    <td><?php se($result, "account_number"); ?></td>
                    <td><?php
                        if ($result["account_type"] == 1) {
                            echo "Checking";
                        } else if ($result["account_type"] == 3) {
                            echo "Savings";
                        } else if ($result["account_type"] == 4) {
                            echo "Loan";
                        } else {
                            echo "Unknown account type";
                        }
                        ?></td>
                    <td>
                        <?php
                        $print_amount = se($result, "balance", "", false);
                        if ($result["account_type"] == 4) {
                            $print_amount *= -1;
                        }
                        echo $print_amount;
                        ?>
                    </td>
                    <td><?php se($result, "modified"); ?></td>
                    <td>
                        <?php
                        $account_type = $result["account_type"];
                        $account_id = $result["id"];
                        if ($account_type == 3 || $account_type == 4) {
                            $apy_query = "SELECT apy FROM SystemProperties WHERE account_id = :aid";
                            $db = getDB();
                            $stmt = $db->prepare($apy_query);
                            try {
                                $stmt->execute([":aid" => $account_id]);
                                $apy_result = $stmt->Fetch(PDO::FETCH_ASSOC);
                                $apy = $apy_result["apy"] ?? "-";
                            } catch (Exception $e) {
                                $apy = "-";
                                flash("There was an issue finding your apy", "warning");
                            }
                        } else {
                            $apy = "-";
                        }

                        echo $apy;
                        ?>

                    </td>
                    <td>
                        <form method="POST">
                            <input type="submit" value=<?php se($result, "account_number") ?> name="click" />
                        </form>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../partials/flash.php");
?>