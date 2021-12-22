<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Creation Menu</h1>
<?php

if (is_logged_in(true)) {
    echo "Login Confirmed" ;
    //comment this out if you don't want to see the session variables
    //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
}
?>


<h3 class="text-center mt-4">Create A New Bank Account</h3>

<form method="POST">
  <div class="form-group">
    <label for="account_type">Account Type</label>
    <select class="form-control" id="account_type" name="account_type">
      <option value="checking">Checking</option>
      <option value="savings">Savings</option>
	  </select>
  </div>
  <div class="form-group">
    <label for="deposit">Deposit</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">$</span>
      </div>
      <input type="number" class="form-control" id="deposit" min="5.00" name="balance" step="0.01" placeholder="5.00" aria-describedby="depositHelp"/>
    </div>
    <small id="depositHelp" class="form-text text-muted">Minimum $5.00 deposit required.</small>
  </div>
  <button type="submit" name="save" value="create" class="btn btn-primary">Create</button>
</form>

<?php
if (isset($_POST["save"])) {
  $db = getDB();
  $check = $db->prepare('SELECT account_number FROM Accounts WHERE account_number = :q AND active = 1');
  do {
    $account_number = rand(100000000000, 999999999999);
    $check->execute([':q' => $account_number]);
  } while ( $check->rowCount() > 0 );

  
  $account_type = $_POST["account_type"];

  $balance = $_POST["balance"];
  if($balance < 5) {
    die(flash("Minimum balance not deposited."));
  }

  //calc
  if($account_type == "savings"){
    $apy = $balance / 10000;
  } else {
    $apy = 0;
  }
  $user = get_user_id();
  $stmt = $db->prepare(
    "INSERT INTO Accounts (account_number, user_id, account_type, balance, APY) VALUES (:account_number, :user, :account_type, :balance, :apy)"
  );
  $r = $stmt->execute([
    ":account_number" => $account_number,
    ":user" => $user,
    ":account_type" => $account_type,
    ":balance" => 0,
    ":apy" => $apy
  ]);
  if ($r) {
    changeBalance($db, 1, $db->lastInsertId(), 'deposit', $balance, 'New account deposit');
    flash("Account created successfully with Number: " . $account_number);
    die(header("Location: accounts.php"));
  } else {
    flash("Error creating account");
  }
}

require __DIR__ . "/../../partials/flash.php";

?>