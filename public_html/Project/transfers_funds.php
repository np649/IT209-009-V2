<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Transfer Funds</h1>

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
  $account_src = $_POST["account_src"];
  $balance = $_POST["balance"];
  $memo = $_POST["memo"];

  $last_name = $_POST["last_name"];
  $acct_nums = $_POST["acct_nums"];

  

  $stmt = $db->prepare('SELECT Accounts.id, Users.username FROM Accounts JOIN Users ON Accounts.user_id = Users.id WHERE Users.last_name = :last_name AND Accounts.account_number ');
  $stmt->execute([':last_name' => $last_name,]);
  $account_dest = $stmt->fetch(PDO::FETCH_ASSOC);

  if($account_src == $account_dest["id"] || $account_dest["username"] == get_username()) {
    flash("Cannot transfer to the same user!");
    die(header("Location: transfers_funds.php"));
  }
  $stmt = $db->prepare('SELECT balance FROM Accounts WHERE id = :id');
  $stmt->execute([':id' => $account_src]);
  $acct = $stmt->fetch(PDO::FETCH_ASSOC);
  if($acct["balance"] < $balance) {
    flash("Not enough funds to transfer!");
    die(header("Location: transaction.php?type=transfer"));
  }
  $r = changeBalance($db, $account_src, $account_dest, 'ext-transfer', $balance, $memo);

  if ($r) {
    flash("Successfully transfered.");
  } else {
    flash("Error");
  }
}

?>

<h3 class="text-center mt-4">Transfer Out</h3>

<form method="POST">
  <?php if (count($results) > 0): ?>
  <div class="form-group">
    <label for="account">Account Source</label>
    <select class="form-control" id="account" name="account_src">
      <?php foreach ($results as $r): ?>
      <option value="<?php safer_echo($r["id"]); ?>">
        <?php safer_echo($r["account_number"]); ?> | <?php safer_echo($r["account_type"]); ?> | <?php safer_echo($r["balance"]); ?>
      </option>
      <?php endforeach; ?>
    </select>
  </div>
  <?php endif; ?>
  <div class="row">
    <div class="col-sm">
      <div class="form-group">
        <label for="last_name">Recipient's Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" maxlength="60" required placeholder="Last Name">
      </div>
    </div>
    <div class="col-sm">
      <div class="form-group">
        <label for="acct_nums">Recipient Account</label>
        <input type="number" class="form-control" id="acct_nums" name="acct_nums" maxlength="60" required placeholder="XXXX">
      </div>
    </div>
  </div>
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
  <button type="submit" name="save" value="Do Transaction" class="btn btn-success">Confirm</button>
</form>

<?php require __DIR__ . "/../../partials/flash.php"; ?>