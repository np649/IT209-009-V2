<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Transaction History</h1>
<?php

if (is_logged_in(true)) {
    echo "Login Confirmed" ;
    //comment this out if you don't want to see the session variables
    //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
}
?>

<?php

$id = -1;
if(isset($_GET["id"])){
    $id = $_GET["id"];
}
$results = [];
if (isset($id)) {
    $db = getDB();
    $stmt = $db->prepare("SELECT A1.account_number as Src, A2.account_number as Dest, expected_total, memo, T.action_type, T.amount from Transactions as T JOIN Accounts as A1 on A1.id = T.act_src_id JOIN Accounts as A2 on A2.id = T.act_dest_id WHERE T.act_src_id=:id LIMIT 10");
    $r = $stmt->execute([":id" => $id]);
    if ($r) {
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    else {
        flash("There was a problem fetching the results");
    }
}
?>

<table class="table table-bordered">
    <?php if (count($results) > 0): ?>
        <thead>
	 <tr class="text-center">
	   <th scope="col">Account Number (Source)</th>
           <th scope="col">Account Number (Dest)</th>
           <th scope="col">Transaction Type</th>
           <th scope="col">Change</th>
           <th scope="col">Memo</th>
           <th scope="col">Balance</th>
	  </tr>
	</thead>

            <?php foreach ($results as $r): ?>
                <tbody>
		  <tr>
                    <td class="text-center"><?php safer_echo($r["Src"]);?></td>
                    <td class="text-center"><?php safer_echo($r["Dest"]);?></td>
		            <td class="text-center"><?php safer_echo($r["action_type"]);?></td>
                    <td class="text-center"><?php safer_echo($r["amount"]);?></td>
                    <td class="text-center"><?php safer_echo($r["memo"]);?></td>
                    <td class="text-center"><?php safer_echo($r["expected_total"]);?></td>
                </tr>
            <?php endforeach; ?>
	  </tbody>
        </table>
    <?php else: ?>
        <p>No results</p>
    <?php endif; ?>
</div>
<?php require(__DIR__ . "/../../partials/flash.php"); ?>