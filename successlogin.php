<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Talko Forum</title>
  <link rel="icon" href="logo.png" type="image/x-icon">
</head>
<body>
  <div class="topnav">
    <div class="topnav-img" id="logo">
        <img src="logo.png" width="45" height="45" draggable="false" alt="logo">
      </div>
    <a href="/" id="home" draggable="false">Talko Forum</a>
    <?php
    include 'functions.php';

    if($_SESSION['signed_in'] = true) {
          echo '<a href="signout.php">Sign out</a>';
        } else {
          echo '<a href="/register.php" id="register" draggable="false">Register</a>'
          . '<a href="/login.php" id="login" draggable="false">Login</a>';
        }
    ?>
    <!-- <a href="/register.php" id="register" draggable="false">Register</a>
    <a href="/login.php" id="login" draggable="false">Login</a> -->
  </div>
<?php
header( "refresh:5;url=http://talkoforum.ngrok.io/" );
echo "Welcome " . $_SESSION["username"] . ", you are being redirected to the <a href=/index.php>front page</a>.";
?>
