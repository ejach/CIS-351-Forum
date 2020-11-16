<?php
  include 'functions.php';
  include 'db-config.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Talko Forum</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="icon" href="logo.png" type="image/x-icon">
</head>
<body class="loginBody">
  <div class="topnav">
    <div class="topnav-img" id="logo">
        <img src="logo.png" width="45" height="45" draggable="false" alt="logo">
      </div>
    <a href="/" id="home" draggable="false">Talko Forum</a>
    <a href="#register" id="register" draggable="false">Register</a>
    <a href="/login.php" id="login" draggable="false">Login</a>
  </div>
  <form method = "post" action = "/insert.php">
    <br>
    <label class="label" for="name">NAME</label>
    <input class="input" type="text" name="name" id="name" placeholder="Name...">
    <br>
    <br>
    <label class="label" for="email">EMAIL</label>
    <input class="input" type="text" name="email" id="email" placeholder="Email...">
    <br>
    <br>
    <label class="label" for="usern">USERNAME</label>
    <input class="input" type="text" name="usern" id="usern" placeholder="Username...">
    <br>
    <br>
    <label class="label" for="npass">PASSWORD</label>
    <input class="input" type="password" name="npass" id="npass" placeholder="Password...">
    <br>
    <br>
    <input style="background-color:#2F1B1B;" type ="submit" class="btn btn-primary btn-lg active btn-rounded buttonStyle" value= "REGISTER">
    <br>
</form>
</body>
</html>
