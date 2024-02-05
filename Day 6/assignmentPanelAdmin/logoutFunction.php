<?php
session_start(); // Start the session

// Logout logic
session_unset();
session_destroy();

// Redirect to the login page or any other desired page after logout
header("Location: login.php");
exit;
?>