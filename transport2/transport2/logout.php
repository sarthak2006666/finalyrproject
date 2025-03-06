<?php
session_start();
session_destroy(); // Destroy session
header("Location: navbar.php"); // Redirect to login page
exit;
?>
