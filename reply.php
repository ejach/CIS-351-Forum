<?php session_start(); ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="icon" href="logo.png" type="image/x-icon">
  <title> Forum Talko </title>
</head>
  <div class="topnav">
    <div class="topnav-img" id="logo">
        <img src="logo.png" width="45" height="45" draggable="false" alt="logo">
      </div>
    <a href="/" id="home" draggable="false">Talko Forum</a>
<?php
include 'db-config.inc.php';
include 'functions.php';
$mysqli = connect();
if(!$_SESSION['signed_in'])
    {
        echo 'You must be signed in to post a reply.';
    }
    else {
      createReply();
      echo "Your reply has been created.";
    }
?>
