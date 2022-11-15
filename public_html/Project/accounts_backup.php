<?php
require(__DIR__ . "/../../partials/nav.php");
?>

<h1>Accounts</h1>
<table>
    <tr>
        <th>Account Number</th>
        <th>Account Type</th>
        <th>Balance</th>
        <th>Modified</th>
    </tr>
    <?php
    $query = "SELECT account_number, account_type, modified, balance FROM Accounts WHERE user_id = :userid";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":userid" => get_user_id()]);
        while ($results = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>" . $results["account_number"] . "</td><td>" . $results["account_type"] . "</td><td>" . $results["balance"] . "</td><td>" . $results["modified"] . "</td></tr>";
        }
    } catch (Exception $e) {
        flash("Issue finding accounts", "danger");
    }
    ?>

</table>

<?php
$query = "SELECT account_number, account_type, modified, balance FROM Accounts WHERE user_id = :userid";
$db = getDB();
$stmt = $db->prepare($query);
try {
    $stmt->execute([":userid" => get_user_id()]);
    while ($results = $stmt->fetch(PDO::FETCH_ASSOC)) {
    }
} catch (Exception $e) {
    flash("Issue finding accounts", "danger");
}
