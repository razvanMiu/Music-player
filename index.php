<!DOCTYPE html>

<?php
  include("./includes/config.php");

  // session_destroy();

  if(isset($_SESSION['userLoggedIn'])) {
    $usserLoggedIn = $_SESSION['userLoggedIn'];
  } else {
    header("Location: register.php");
  }
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to Musicfly!</title>
  </head>
  <body>
    HELLO!
  </body>
</html>
