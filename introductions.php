<?php session_start();
include 'db-config.inc.php';
include 'functions.php';
$mysqli = connect();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="icon" href="logo.png" type="image/x-icon">
</head>
<body>
  <div class="topnav">
    <div class="topnav-img" id="logo">
        <img src="logo.png" width="45" height="45" draggable="false">
      </div>
    <a href="/" id="home" draggable="false">Talko Forum</a>
    <?php loginBar(); ?>
  </div>
  <form method = "post" action = "newpost.php">
    <input type="submit" class="btn btn-primary btn-lg active btn-rounded login" value="New Post" style="display:inline-block;  font-family: 'Lucida Console', Courier, monospace; float:left; margin-top: 25px; background-color:#2F1B1B; color:white">
  </form>
    <h3 id="divider" style="margin-top: 45px; position: sticky; display:block">Posts</h3>
  <table border="1" style="border:8px;">

      <tr><th>Title:</th><th>User:</th><th>Date:</th>
    <?php
    $sql = "SELECT * FROM `posts` WHERE 1 ORDER BY `post_date` DESC";
    $result = $mysqli->query($sql);
    while ($row = $result->fetch_assoc()) {
      $topic = $row['post_topic'];
      $postID = $row['post_id'];
      $date = $row['post_date'];
      $postBy = $row['post_by'];
      echo
      '<tr>'.
        '<td><a href="topic.php?id='.$postID.'">'.$topic.'</a></td>'.
        '<td>'. $postBy .'</td>'.
        '<td style="text-align: center">'. $date .'</td>'.
      '</tr>';
    }
     ?>
   </table>
  <footer id="footer" style="position: absolute; text-align: center; bottom: 0; width: 100%; height: 2.5rem;">
  <?php footerBar();  ?>
</html>
