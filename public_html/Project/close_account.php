<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Loans</h1>
<?php

if (is_logged_in(true)) {
    echo "Login Confirmed" ;
    //comment this out if you don't want to see the session variables
    //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
}
?>


<?php


$user = get_user_id();
$db = getDB();
$stmt = $db->prepare("SELECT id, account_number, account_type, balance FROM Accounts WHERE user_id = :id AND active = 1 ORDER BY id ASC");
$stmt->execute([':id' => $user]);
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST["save"])) {
  $id = $_POST["account"];

  $stmt = $db->prepare('SELECT balance, account_number FROM Accounts WHERE id = :q');
  $stmt->execute([ ":q" => $id ]);
  $account = $stmt->fetch(PDO::FETCH_ASSOC);
  if($account["balance"] != 0) {
    flash("you cannot close an account with a balance");
    die(header("Location: close_account.php"));
  }

  $user = get_user_id();
  $stmt = $db->prepare(
    "UPDATE Accounts SET active = 0 WHERE id = :id"
  );
  $r = $stmt->execute([ ":id" => $id ]);
  if ($r) {
    flash("Account ".$account["account_number"]." successfully closed.");
    die(header("Location: accounts.php"));
  } else {
    flash("error");
  }
}
?>

<h3 class="text-center mt-4">Choose an Account to Close</h3>

<form method="POST">
  <div class="form-group">
    <label for="account_dest">Account</label>
    <select class="form-control" id="account" name="account">
      <?php foreach ($accounts as $r): ?>
      <option value="<?php safer_echo($r["id"]); ?>">
        <?php safer_echo($r["account_number"]); ?> | <?php safer_echo($r["account_type"]); ?> | <?php safer_echo($r["balance"]); ?>
      </option>
      <?php endforeach; ?>
    </select>
    <small id="accountHelp" class="form-text text-muted">Account Balance has to be $0 in order to be closed.</small>
  </div>
  <button type="submit" name="save" value="close" class="btn btn-primary">Close</button>
</form>

<?php require __DIR__ . "/../../partials/flash.php"; ?>