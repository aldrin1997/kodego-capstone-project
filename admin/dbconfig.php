<?php
// Database configuration
$dbHost = 'localhost';
$dbName = 'loan_db';
$dbUser = 'root';
$dbPass = '';

// Establish database connection
try {
    // Create PDO connection
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4", $dbUser, $dbPass);
    // Set PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
