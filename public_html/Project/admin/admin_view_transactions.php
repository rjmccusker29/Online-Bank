<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}



if (isset($_GET["page_number"])) {
    $page_number = $_GET["page_number"];
} else {
    $page_number = 1;
}
$offset = ($page_number - 1) * 10;

$viewing_account_id = $_SESSION["viewing_user"]["account_id"];
$viewing_account_number = $_SESSION["viewing_user"]["account_number"];

$pagination_query = "SELECT COUNT(id) FROM Transactions WHERE account_src = :an";
$db = getDB();
$stmt = $db->prepare($pagination_query);
try {
    $stmt->execute([":an" => $viewing_account_id]);
    $pagination_result = $stmt->Fetch(PDO::FETCH_DEFAULT);
    $transaction_count = $pagination_result["COUNT(id)"];
    $page_count = ceil($transaction_count / 10);

    $info_query = "SELECT account_src, account_dest, transaction_type, balance_change, created, expected_total, memo 
    FROM Transactions 
    WHERE account_src = :accountid
    AND transaction_type LIKE :type
    AND created >= :start 
    AND created <= :end 
    LIMIT $offset, 10";


    if (isset($_POST["transaction_type"]) && $_POST["transaction_type"] != "all") {
        $type = $_POST["transaction_type"];
    } else {
        $type = "%";
    }

    if (isset($_POST["start_date"]) && $_POST["start_date"] != "") {
        $start = $_POST["start_date"] . " 00:00:00";
    } else {
        $start = "1900-01-01 00:00:00";
    }

    if (isset($_POST["end_date"]) && $_POST["end_date"] != "") {
        $end = $_POST["end_date"] . " 23:59:59";
    } else {
        $end = "3000-01-01 00:00:00";
    }


    $stmt = $db->prepare($info_query);

    try {
        $stmt->execute([":accountid" => $viewing_account_id, ":type" => $type, ":start" => $start, ":end" => $end]);
        $info_results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        flash("Issue finding accounts", "danger");
    }
} catch (PDOException $e) {
    flash("There was a problem finding your account information", "danger");
}


//handle the toggle first so select pulls fresh data
$account_query = "SELECT account_number, account_type, balance, created FROM Accounts WHERE account_number = :an";
$db = getDB();
$stmt = $db->prepare($account_query);
try {
    $stmt->execute([":an" => $viewing_account_number]);
    $results = $stmt->Fetch(PDO::FETCH_ASSOC);
    echo "Account number: ";
    se($results, "account_number", "", true);
    echo "<br>";
    echo "Account type: ";
    se($results, "account_type", "", true);
    echo "<br>";
    echo "Balance: ";
    se($results, "balance", "", true);
    echo "<br>";
    echo "Created: ";
    se($results, "created", "", true);
    echo "<br>";
    $apy = "-";
    if ($results["account_type"] == 3 || $results["account_type"] == 4) {
        $interest_query = "SELECT apy FROM SystemProperties WHERE account_id = :aid";
        $db = getDB();
        $stmt = $db->prepare($interest_query);
        try {
            $stmt->execute([":aid" => $viewing_account_id]);
            $interest_results = $stmt->Fetch(PDO::FETCH_ASSOC);
            $apy = $interest_results["apy"] * 100;
            echo "Annual Percentage Yield: " . $apy . "%";
            echo "<br>";
            echo "Monthly interest: " . ($apy / 12) . "%";
            echo "<br>";
        } catch (Exception $e) {
            flash("There was a problem finding your interest", "danger");
        }
    }
    echo "Annual Percentage Yield: " . $apy . "%";
    echo "<br>";
} catch (Exception $e) {
    flash("There was a problem finding your account", "danger");
}

$frozen_query = "SELECT frozen FROM Accounts WHERE account_number = :an";
$db = getDB();
$frozen_stmt = $db->prepare($frozen_query);
try {
    $frozen_stmt->execute([":an" => $viewing_account_number]);
    $frozen_result = $frozen_stmt->Fetch(PDO::FETCH_ASSOC);
    $frozen_status = $frozen_result["frozen"];
} catch (Exception $e) {
    flash("There was a problem finding frozen status", "danger");
}

if (isset($_POST["btn_freeze"])) {
    if ($frozen_status == 1) {
        $frozen_status = 0;
    } else {
        $frozen_status = 1;
    }

    $change_freeze_query = "UPDATE Accounts SET frozen = :frozen WHERE account_number = :an";
    $db = getDB();
    $change_freeze_stmt = $db->prepare($change_freeze_query);
    try {
        $change_freeze_stmt->execute([":frozen" => $frozen_status, ":an" => $viewing_account_number]);
        flash("Successfully froze account", "success");
    } catch (Exception $e) {
        flash("There was a problem updating frozen status", "danger");
    }
}


?>
<p>Frozen Status: <?php
                    if ($frozen_status == 1) {
                        echo "frozen";
                    } else {
                        echo "not frozen";
                    }
                    ?>
</p>
<form method="POST">
    <input type="submit" value="Change Frozen State" name="btn_freeze" />
</form>


<h1>List Transactions</h1>

<table>
    <thead>
        <th>Source Account</th>
        <th>Destination Account</th>
        <th>Transaction Type</th>
        <th>Balance Change</th>
        <th>Created</th>
        <th>Expected Total</th>
        <th>Memo</th>
    </thead>
    <form method="POST">
        <div>
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" />
        </div>
        <div>
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" id="end_date" />
        </div>
        <div>
            <label for="transaction_type">Transaction Type</label>
            <select id="transaction_type" name="transaction_type">
                <option value="all">all</option>
                <option value="deposit">deposit</option>
                <option value="withdrawal">withdrawal</option>
                <option value="transfer">transfer</option>
            </select>
        </div>
        <input type="submit" value="Filter" />
    </form>
    <tbody>
        <?php foreach ($info_results as $result) : ?>
            <tr>
                <td><?php se($result, "account_src"); ?></td>
                <td><?php se($result, "account_dest"); ?></td>
                <td><?php se($result, "transaction_type"); ?></td>
                <td><?php se($result, "balance_change"); ?></td>
                <td><?php se($result, "created"); ?></td>
                <td><?php se($result, "expected_total"); ?></td>
                <td><?php se($result, "memo"); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<ul class="pagination">
    <li><a href="?page_number=1">First</a></li>
    <li class="<?php if ($page_number <= 1) {
                    echo 'disabled';
                } ?>">
        <a href="<?php if ($page_number <= 1) {
                        echo '#';
                    } else {
                        echo "?page_number=" . ($page_number - 1);
                    } ?>">Prev</a>
    </li>
    <li class="<?php if ($page_number >= $page_count) {
                    echo 'disabled';
                } ?>">
        <a href="<?php if ($page_number >= $page_count) {
                        echo '#';
                    } else {
                        echo "?page_number=" . ($page_number + 1);
                    } ?>">Next</a>
    </li>
    <li><a href="?page_number=<?php echo $page_count; ?>">Last</a></li>
</ul>

<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>