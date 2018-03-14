<?php

  //  Sanitize Data

  function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);

    return $inputText;
  }

  function sanitizeFormString2($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));

    return $inputText;
  }

  function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText);

    return $inputText;
  }



  if(isset($_POST['registerButton'])) {
    // Register button was pressed
    $username     = sanitizeFormString($_POST['username']);
    $email        = sanitizeFormString($_POST['email']);
    $email2       = sanitizeFormString($_POST['email2']);
    $firstName    = sanitizeFormString2($_POST['firstName']);
    $lastName     = sanitizeFormString2($_POST['lastName']);
    $password     = sanitizeFormPassword($_POST['password']);
    $password2    = sanitizeFormPassword($_POST['password2']);

    $wasSuccesful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

    if($wasSuccesful) {
      $_SESSION['userLoggedIn'] = $username;
      header("Location: index.php");
    }

  }
?>
