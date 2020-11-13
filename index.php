<?php session_start();
include 'functions.php'; ?>
<!DOCTYPE html>
<html>
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
        <img src="logo.png" width="45" height="45" draggable="false">
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
  </div>
  <div id="main">
    <h2>Talko Forum</h2>
    <?php
    if ($_SESSION['signed_in']) {
      echo '<p id="welcome">Welcome ' . $_SESSION['username'] . '.</p><br>';
    } else {
      echo '<p id="welcome">Welcome unknown user! Please <a href="/login.php">sign in</a> or <a href="/register.php">create an account.</a></p><br>';
    }
    ?>
    <div class="container">
      <h3 id="divider">General</h3>
      <input type="image"  id="minus" src="minus.png" class="collapsible"  alt="Submit Form" />
      <br><a href="introductions.php" id="content" draggable="false">Introductions</a>
      <br><i id="subtext">Introduce yourself</i>
      <br><a href="#" id="content" draggable="false">Forum-specific</a>
      <br><i id="subtext">Questions about the forum</i>
      <br><a href="#" id="content" draggable="false">Birthday Wishes</a>
      <br><i id="subtext">Wish the members of the forum Happy Birthday!</i>
    </div>
    <div class="container">
      <br><h3 id="divider">Off-Topic</h3><img src="minus.png" id="minus" height="15" width="17">
      <br><a href="#" id="content" draggable="false">Video Games</a>
      <br><i id="subtext">See what videogames your fellow members play</i>
      <br><a href="#" id="content" draggable="false">Music</a>
      <br><i id="subtext">Looking for music suggestions? Look no further!</i>
      <br><a href="#" id="content" draggable="false">Misc</a>
      <br><i id="subtext">Can't find a topic? Post it here!</id>
    </div>
    <footer id="footer" style="position: absolute; text-align: center; bottom: 0; width: 100%; height: 2.5rem;">
    <?php
    if ($_SESSION['signed_in']) {
      echo "<a href='/'>Home</a>|<a href='/signout.php'>Sign Out</a>";
    } else {
      echo "<a href='/'>Home</a>|<a href='/login.php'>Login</a>|<a href='/register.php'>Register</a>";
    }
    ?>
    </footer>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('#minus');
      var instances = M.Collapsible.init(elems, options);
    });
</script>
</body>
</html>
