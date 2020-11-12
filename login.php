<?php
  include('server.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Information | Lonegamerz</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous">
  </head>

  <body>

    <div class="main">

      <!-- Login Section -->
        <input type="checkbox" class="section--toggle "id="section-switch">
        <a href="index.html">
        <img src="img/ClanLogo.png" alt="Logo" width="200px;">
        </a>
        <section id="login-box">
          <h1>Login</h1>
          <?php include('errors.php'); ?>
          <form class="login" action="login.php" method="post">
            <div class="textbox">
              <i class="fas fa-user"></i>
              <input type="text" id="userid" name="userid" placeholder="Username" required>
            </div>

            <div class="textbox">
              <i class="fas fa-lock"></i>
              <input type="password" id="pass" name="pass" placeholder="Password" required>
            </div>

            <div id="btn-login">
              <input type="submit" name="login" value="Log In">
            </div>
          </form>
      </section>



      <!-- Register Section -->
      <section id="register-box">
        <h1>Register</h1>
        <?php include('errors.php'); ?>
        <form class="register" action="login.php" method="post">
          <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" id="userid" name="userid" placeholder="Username" required>
          </div>

          <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" id="pass" name="pass" placeholder="Password" required>
          </div>

          <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" id="repass" name="repass" placeholder="Re-Enter Password" required>
          </div>

          <div class="textbox">
            <i class="fas fa-envelope"></i>
            <input type="email" id="email" name="email" placeholder="E-mail" required>
          </div>

          <div class="textbox">
            <i class="fas fa-envelope"></i>
            <input type="email" id="reemail"name="reemail" placeholder="Re-Enter Email " required>
          </div>

          <div id="btn-register">
            <input type="submit" name="register" value="Register">
          </div>

        </form>
      </section>


      <label id="reglabel" for="section-switch">
        <p>Not a member? Click here to register.</p>
      </label>

      <label id="loglabel" for="section-switch">
        <p>Already have an account? Login here.</p>
      </label>

    </div>
  </body>
</html>
