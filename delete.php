<?php session_start();
include 'db-config.inc.php';
include 'functions.php';
$mysqli = connect();
$id = $_GET['id'];
// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM posts WHERE post_id =" $id;
if ($mysqli->query($sql)) {
    mysqli_close($mysqli);
    header('Location: introductions.php');
    exit;
} else {
    echo "Error deleting record";
}
?>
