<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Transaction</h1>
<?php

if (is_logged_in(true)) {
    echo "Login Confirmed" ;
    //comment this out if you don't want to see the session variables
    //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
}
?>

<?php
if (isset($_GET["type"])) {
  $type = $_GET["type"];
} else {
  $type = 'deposit';
}


$user = get_user_id();
$db = getDB();

$stmt = $db->prepare('SELECT * FROM Accounts WHERE user_id = :id ORDER BY id ASC');
$stmt->execute([':id' => $user]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST["save"])) {
  $account = $_POST["account"];
  $balance = $_POST["balance"];
  $memo = $_POST["memo"];

  if($type == 'deposit') {
    $r = changeBalance($db, 1, $account, 'deposit', $balance, $memo);
  }
  if($type == 'withdraw')  {
    $r = changeBalance($db, $account, 1, 'withdraw', $balance, $memo);
  }

  if ($r) {
    flash("Success");
  } else {
    flash("error");
  }
}

?>

<h3 class="text-center mt-4"><?php safer_echo(ucfirst($type)) ?></h3>

<ul class="nav nav-pills justify-content-center mt-4 mb-2">
  <li class="nav-item"><a class="nav-link <?php echo $type == 'deposit' ? 'active' : ''; ?>" href="?type=deposit">Deposit</a></li>
  <li class="nav-item"><a class="nav-link <?php echo $type == 'withdraw' ? 'active' : ''; ?>" href="?type=withdraw">Withdraw</a></li>
</ul> 

<form method="POST">
  <?php if (count($results) > 0): ?>
  <div class="form-group">
    <label for="account">Account</label>
    <select class="form-control" id="account" name="account">
      <?php foreach ($results as $r): ?>
      <option value="<?php safer_echo($r["id"]); ?>">
        <?php safer_echo($r["account_number"]); ?> | <?php safer_echo($r["account_type"]); ?> | <?php safer_echo($r["balance"]); ?>
      </option>
      <?php endforeach; ?>
    </select>
  </div>
  <?php endif; ?>
  <div class="form-group">
    <label for="deposit">Amount</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">$</span>
      </div>
      <input type="number" class="form-control" id="deposit" min="0.00" name="balance" step="0.01" placeholder="0.00"/>
    </div>
  </div>
  <div class="form-group">
    <label for="memo">Memo</label>
    <textarea class="form-control" id="memo" name="memo" maxlength="250"></textarea>
  </div>
  <button type="submit" name="save" value="Do Transaction" class="btn btn-success">Execute Transaction</button>
</form>

<?php require __DIR__ . "/../../partials/flash.php"; ?>