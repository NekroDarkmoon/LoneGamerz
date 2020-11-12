<?php

  $errors = array();
  //connect to database
  // $db = mysqli_connect('localhost', 'root', '', 'registration');
  $db = mysqli_connect('localhost', 'root', '', 'n0163207_registration');

  //if the register button is clicked
  if (isset($_POST['register'])) {
    $username = $db->real_escape_string($_POST['userid']);
    $password_1 = $db->real_escape_string($_POST['pass']);
    $password_2 = $db->real_escape_string($_POST['repass']);
    $email_1 = $db->real_escape_string($_POST['email']);
    $email_2 = $db->real_escape_string($_POST['reemail']);

    // ensure forms are filled properly
    if ($password_1 != $password_2) {
      array_push($errors, "Passwords do not match!");
    }

    if ($email_1 != $email_2) {
      array_push($errors, "Email ids do not match!");
    }

    //Incase of no errors add to database
    if (count($errors) == 0) {
      $email = $email_1;
      $password = hash('sha256' , $password_1);
      $sql = "INSERT INTO users (username, email, password) VALUES ('$username',
         '$email', '$password')";
      mysqli_query($db, $sql);
      header('location: success.php');
    }

  }

  //Logging in user
  if (isset($_POST['login'])) {
    $username = $db->real_escape_string($_POST['userid']);
    $password = $db->real_escape_string($_POST['pass']);
    $errors = [];

    if (count($errors) == 0 ) {
      $password = hash('sha256' , $password);
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $result = mysqli_query($db, $query);
      if (mysqli_num_rows($result) == 1) {
        header('location: success.php');
      }else {
        array_push($error, "Incorrect Username or Password");
      }
    }

  }

 ?>
