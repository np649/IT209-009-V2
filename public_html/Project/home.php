<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Dashboard</h1>
<?php

if (is_logged_in(true)) {
    echo "Login Confirmed" ;
    //comment this out if you don't want to see the session variables
    //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
}
?>
<?php
$first_name = get_first_name();
$last_name = get_last_name();
?>
<div class="jumbotron mt-4 text-center">
      <h1 class="display-4">Welcome, <?php se($first_name)?>, <?php se($last_name)?>!</h1>
      <hr class="my-4">

<?php
require(__DIR__ . "/../../partials/flash.php");
?>

