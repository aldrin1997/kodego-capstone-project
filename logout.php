<?php
session_start();

// Clear session data and destroy session
session_destroy();

// Redirect to login page
header("Location: index.php");
exit();
?>
