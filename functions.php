<?php
function connection(){
  //Opening up a connection to the databse
  $mysqli = new mysqli($host = "localhost", $user = "evan", $password = "mustang", $db = "ForumTalko");
  if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
}

function passwordUsername(){
  //setting up variables for the username and password inputs
  $usern = $_POST["user"];
  $pass = $_POST["pass"];
  //The if statment checks if username and password is set.
  if(isset($usern) && isset($pass)){
      //This is setting up a sql statment then setting the username and password as strings.
      $sql = "SELECT * FROM users WHERE username LIKE ? AND password LIKE ?";
      $stmt = $mysqli->prepare($sql);
      $stmt->bind_param("ss", $usern, $pass);
      //It is now executing the statment with the user name and password and getting the result.
      $stmt->execute();
      $result = $stmt->get_result();
      //It is checking if the result's rows are greater than or equal to 1 and if it is not it will display a message
      if($result->num_rows = 1){
          header("Location: http://localhost:8888/formTalko/index.html");
          exit();
      }else{ //bug for US2:1 and US2:2
          print "<p style='color:red; font-size:13px; font-family:Museo Sans;'>USERNAME OR PASSWORD IS INCORRECT</p>";
      }
  }
}

?>
