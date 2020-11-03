<?php
  session_start();
  include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel ="stylesheet" href="stylesheet.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Forum Talko</title>
        <link rel="icon" href="img/tb_trekbook-mark-transparent.png" type="image/x-icon">
    </head>
    <body>
        <div class = "main">
        <div class = "wrapper">
          <h1>Forum Talko!</h1>
          <br>
            <form method = "post" action = "login.php">
                <label class="label" for="user">USERNAME</label>
                <input class="input" type="text" name="user" id="user" placeholder="Username...">
                <br>
                <br>
                <label class="label" for="pass">PASSWORD</label>
                <input class="input" type="password" name="pass" id="pass" placeholder="Password...">
                <?php
                  connection();
                  passwordUsername();
                ?>
                <br>
                <input type ="submit" id = "login" class="btn btn-primary btn-lg active btn-rounded" value= "LOGIN">
                <br>
                <a id = "link" href = "forgotPass.html">CREATE NEW USER</a>
            </form>
        </div>
    </div>
    </body>
</html>
