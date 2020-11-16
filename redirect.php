<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM posts WHERE post_topic like '" . $_GET["keyword"] . "%'";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
  foreach($result as $post_name) {
    header("Location:http://talkoforum.ngrok.io/topic.php?id=" . $post_name["post_id"]);
  }
}
?>
