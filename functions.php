<?php
// Added by Evan, if it screws stuff up remove this
session_start();
include 'db-config.inc.php';
function connect(){
  //Opening up a connection to the databse
  $mysqli = new mysqli(DBHOST, DBUSER, DBPASSWORD, DB);
  if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  return $mysqli;
}

function passwordUsername(){

  $mysqli = connect();

  //setting up variables for the username and password inputs
  $usern = $mysqli -> real_escape_string($_POST["user"]);
  $pass = $_POST["pass"];

  //The if statment checks if username and password is set.
  if(isset($usern) && isset($pass)){
    $_SESSION['username'] = $usern;
      //This is setting up a sql statment then setting the username and password as strings.
      $sql = "SELECT * FROM users WHERE username LIKE ? AND password LIKE ?";
      $stmt = $mysqli->prepare($sql);
      $stmt->bind_param("ss", $usern, $pass);
      //It is now executing the statment with the user name and password and getting the result.
      $stmt->execute();
      $hash = password_hash($pass, PASSWORD_DEFAULT);
      
      $_SESSION['signed_in'] = false;
      if(password_verify($pass, $hash)) {
        $_SESSION['signed_in'] = true;
          header("Location: http://talkoforum.ngrok.io/successlogin.php");
          exit();
      } else {
          print "<p style='color:red; font-size:13px; font-family:Museo Sans;'>USERNAME OR PASSWORD IS INCORRECT</p>";

      }
  }
}
?>
