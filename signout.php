<?php
session_start();

// Unset all of the session variables.
unset($_SESSION['username']);
// unset($_SESSION['signed_in']);
// Finally, destroy the session.
session_destroy();

// Include URL for Login page to login again.
header("Location: index.php");
exit;
?>
