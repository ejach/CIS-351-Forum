<?php
include 'functions.php';

if($_SESSION['signed_in'] = true) {
      echo '<a href="signout.php">Sign out</a>';
    } else {
      echo '<a href="/register.php" id="register" draggable="false">Register</a>'
      . '<a href="/login.php" id="login" draggable="false">Login</a>';
    }
?>
