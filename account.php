<?php
session_start();
if ($_SESSION['signed_in']) {
  //. $_SESSION['username']
  $imagePath = '/var/www/html/imgs/' . $_SESSION["username"]);
  if (!file_exists($imagePath) {
      mkdir($imagePath , 0777, true);
  }
} else {
  echo '<p id="welcome">Welcome unknown user! Please <a href="/login.php">sign in</a> or <a href="/register.php">create an account.</a></p><br>';
}
    include 'accountFunctions.php';
    $mysqli = new mysqli(DBHOST, DBUSER, DBPASSWORD, DB);
    $sql = "SELECT * FROM profile";
    $res = $mysqli->query($sql);
    $prof = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel ="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>ForumTalko</title>
    </head>
    <body class="loginBody">
        <div class = "main">
        <div class = "wrapper">
          <form enctype="multipart/form-data" method="POST" action="uploadImage.php">
            <input type="file" name="file1"><br>
            <input style="background-color:#2F1B1B;" class="btn btn-primary btn-md active btn-rounded buttonStyle" type="submit" value="SUBMIT IMAGE">
            <br>
          </form>
            <form method = "post" action = "account.php">
              <br>
                <?php echo $prof["username"]; ?>
                <label class="label" for="email">EMAIL</label>
                <input class="input" type="text" name="email" id="email" placeholder="Email..." value="<?php echo $prof["email"]; ?>"><br>
                <label class="label" for="npass">NEW PASSWORD</label>
                <input class="input" type="password" name="npass" id="npass" placeholder="New Password..."><br>
                <label class="label" for="vpass">VERIFY PASSWORD</label>
                <input class="input" type="password" name="vpass" id="vpass" placeholder=" Retype Password...">
                <br>
                <?php
                    updateEmail($_POST["email"], $_SESSION["user"]);
                    updatePassword($_POST["npass"], $_POST["vpass"], $_SESSION["user"]);
                ?>
                <br>
                <input type="submit" style="background-color:#2F1B1B;" class="btn btn-primary btn-lg active btn-rounded buttonStyle" value="SAVE CHANGES">
                <br>
            </form>
        </div>
    </div>
    </body>
</html>
