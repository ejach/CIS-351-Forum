<?php
include 'db-config.inc.php';
$mysqli = connect();

function verifyHash($pass, $hash) {
  if (password_verify($pass, $hash)) {
    return "Password verified.<br>";
  }
}
?>
