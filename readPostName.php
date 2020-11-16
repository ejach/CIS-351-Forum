<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["keyword"])) {
$query ="SELECT * FROM posts WHERE post_topic like '" . $_GET["keyword"] . "%' ORDER BY post_topic LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $post_name) {
?>
<li onClick="selectPost('<?php echo $post_name["post_topic"];?>);"><?php echo $post_name["post_topic"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>
