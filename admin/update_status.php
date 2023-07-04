<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loan_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve the ID and status from the AJAX request
$id = $_POST['id'];
$status = $_POST['status'];

// SQL query to update the application status
$sql = "UPDATE loan_application SET application_status = '$status' WHERE id = $id";

// Execute the query
if ($conn->query($sql) === TRUE) {
  echo "Status updated successfully";
} else {
  echo "Status update failed";
}

$conn->close();
?>
