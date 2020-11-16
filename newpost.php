<?php session_start();
include 'db-config.inc.php';
include 'functions.php';
$mysqli = connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="icon" href="logo.png" type="image/x-icon">
  <title> Forum Talko </title>
</head>

<body>
  <div class="topnav">
    <div class="topnav-img" id="logo">
        <img src="logo.png" width="45" height="45" draggable="false" alt="logo">
      </div>
    <a href="/" id="home" draggable="false">Talko Forum</a>
    <?php loginBar(); ?>
  </div>
  <div class="Cats123" >
    <form method = "post" action = "post.php" style="font-family: "Lucida Console", Courier, monospace;">
      <?php
      if($_SESSION['signed_in'])
      {
        echo '<label>Title:</label> <br>
        <textarea id="title" for="post_title" name="title" rows="1" cols="50">
        </textarea>
        <br>
        <label id="post_content">Message:</label>
        <br>
        <textarea for="post_content" name="content" rows="4" cols="50">
        </textarea>
        <br>
        <br>
        <input style="background-color:#2F1B1B;" type ="submit" id="buttonStyle" class="btn btn-primary btn-lg active btn-rounded buttonStyle" value= "POST">
        ';
      } else {
        echo 'You must be <a href="/login.php">signed in</a> to create a post.';
      }
      ?>
      </form>
  </div>
</body>
</html>
