<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel ="stylesheet" href="stylesheet.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>ForumTalko</title>
    </head>
    <body>
        <div class = "main">
        <div class = "wrapper">

            <form method = "post" action = "account.php">
                <?php echo $prof["username"]; ?>
                <label class="label" for="email">EMAIL</label>
                <input class="input" type="text" name="email" id="email" placeholder="Email..." value="<?php echo $prof["email"]; ?>">
                <label class="label" for="npass">NEW PASSWORD</label>
                <input class="input" type="password" name="npass" id="npass" placeholder="New Password...">
                <label class="label" for="vpass">VERIFY PASSWORD</label>
                <input class="input" type="password" name="vpass" id="vpass" placeholder=" Retype Password...">
                <br>
                <?php
                    updateUsername($_POST["name"], $_SESSION["user"]);
                    updateEmail($_POST["email"], $_SESSION["user"]);
                    updatePassword($_POST["npass"], $_POST["vpass"], $_SESSION["user"]);
                ?>
                <br>
                <input type="submit" id="login" class="btn btn-primary btn-lg active btn-rounded" value="SAVE CHANGES">
                <br>
            </form>
        </div>
    </div>
    </body>
</html>
