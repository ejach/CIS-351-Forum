<?php
  session_start();
  include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel ="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Talko Forum</title>
        <link rel="icon" href="img/tb_trekbook-mark-transparent.png" type="image/x-icon">
        <link rel="icon" href="logo.png" type="image/x-icon">
    </head>
    <body class = "loginBody">
        <div class = "main">
          <div class="topnav">
            <div class="topnav-img" id="logo">
                <img src="logo.png" width="45" height="45" draggable="false" alt="logo">
              </div>
            <a href="/" id="home" draggable="false">Talko Forum</a>
            <?php
            if($_SESSION['signed_in']) {
                  echo '<a href="signout.php">Sign out</a>';
                } else {
                  echo '<a href="/register.php" id="register" draggable="false">Register</a>'
                  . '<a href="/login.php" id="login" draggable="false">Login</a>';
                }
            ?>
            <!-- <a href="/register.php" id="register" draggable="false">Register</a>
            <a href="/login.php" id="login" draggable="false">Login</a> -->
          </div>
          <br>
            <form method = "post" action = "login.php">
                <label class="label" for="user">USERNAME</label><br>
                <input class="input" type="text" name="user" id="user" placeholder="Username...">
                <br>
                <label class="label" for="pass">PASSWORD</label><br>
                <input class="input" type="password" name="pass" id="pass" placeholder="Password...">
                <?php
                 passwordUsername();
                ?>
                <br>
                <br>
                <input style="background-color:#2F1B1B;" type ="submit" id="buttonStyle" class="btn btn-primary btn-lg active btn-rounded buttonStyle" value= "LOGIN">
                <br>
                <a id = "link" href = "/register.php">CREATE NEW USER</a>
            </form>
        </div>
    </body>
</html>
