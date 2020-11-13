<?php session_start();
include 'db-config.inc.php';
include 'functions.php';
?>
<!DOCTYPE html>
<html>
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
        <img src="logo.png" width="45" height="45" draggable="false">
      </div>
    <a href="/" id="home" draggable="false">Talko Forum</a>
    <a href="/register.php" id="register" draggable="false">Register</a>
    <a href="/login.php" id="login" draggable="false">Login</a>
  </div>
<?php
  $mysqli = connect();
  $password = $_POST["npass"];
  $email = $_POST["email"];
  $usern = $mysqli->real_escape_string($_POST["usern"]);
  $formComplete = false;
if (!empty($_POST['usern']) || !empty($_POST['npass']) || !empty($_POST['email'])) {
	// If none of the
	$formComplete = true;
}
  // Username doesnt exists, insert new account
if ($formComplete === true) {
  $hash = password_hash($password, PASSWORD_DEFAULT);
  $stmt = $mysqli->prepare('INSERT INTO users (`username`, `password`, `email`) VALUES (?, ?, ?)');
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$stmt->bind_param('sss', $usern, $hash, $email);
	$stmt->execute();
	echo '<br>You have successfully registered, you can now <a href=/login.php>login!</a><br>';
} else {
	echo 'Could not prepare statement!';
  echo mysql_errno($mysqli) . ": " . mysql_error($mysqli) . "\n";
}
if (password_verify($password, $hash)) {
  echo "Password secured";
} else {
  echo "Password has not been secured";
}
mysqli_close($mysqli);
?>
