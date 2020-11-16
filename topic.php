<?php session_start();
include 'db-config.inc.php';
include 'functions.php';
?>
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
loginBar();
$mysqli = connect();

$stmt = "SELECT * FROM `posts` WHERE `post_id`= ".$_GET['id'];

// $stmt->execute();

$result = $mysqli->query($stmt);
while ($row = $result->fetch_assoc()) {
  $topic = $row['post_topic'];
  $postID = $row['post_id'];
  $date = $row['post_date'];
  $postBy = $row['post_by'];
  $postContent = $row['post_content'];
  // echo '<h3 id="divider" style="margin-top: 45px; position: sticky; display:block">Topic: '.$topic.'</h3>';
  // echo '<table border="1" style="border:8px;" id="divider">';
  // echo '<th>Author</th><br><th>Date:</th>';
  echo '<h3 id="topicTitle" style="margin-top: 45px; text-align:center;">Topic: '.$topic.'</h3>';
  echo '<table style="color:white">
<thead>
  <tr>

    <img style="height:45px; width:45px; float:left" src="imgs/'.$postBy.'/'.$postBy.'.jpg"><th style="float:left; display:block">'.$postBy.'</th>
    <td style="float:right">'. $date .'</td>
    <th style="float:right">Date:</th>
  </tr>
  <p style="background:white; color:black; height: 6%; margin-left: 5px">'. $postContent .'</p>
</thead>
</table>';
}

if ($_SESSION['signed_in']) {

  echo'<br><form method="post" action="" style="text-align:center">
    <textarea name="reply-content"></textarea>
    <input type="submit" value="Submit reply" />
    </form>';
} else {
  echo "<p style='text-align:center; color:white; font-size: 10px'>If you wish to reply, please create an account or login.</p>";
}
if ($_SESSION['signed_in'] && $_SESSION['username'] === $postBy) {
  echo'<br><form method="post" action="delete.php" style="text-align:center">
    <input type="submit" value="Delete Post" />
    </form>';
}
