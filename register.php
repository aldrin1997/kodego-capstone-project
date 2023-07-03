<?php
// Retrieve the request body data
$data = json_decode(file_get_contents('php://input'), true);

// Extract the email and password from the data
$email = $data['email'];
$userPassword = $data['password'];

// Perform basic validation
if (empty($email) || empty($userPassword)) {
  // Return an error response
  $response = array(
    'success' => false,
    'message' => 'Please enter your email and password'
  );
  echo json_encode($response);
  exit();
}

// Save the data to the database
$servername = 'localhost';
$username = 'root';
$dbPassword = ''; // Change this variable name to avoid conflicts
$dbname = 'db_loan';

// Create a new MySQLi instance
$conn = new mysqli($servername, $username, $dbPassword, $dbname);

// Check connection
if ($conn->connect_error) {
  // Return an error response
  $response = array(
    'success' => false,
    'message' => 'Failed to connect to the database: ' . $conn->connect_error
  );
  echo json_encode($response);
  exit();
}

// Create a prepared statement
$stmt = $conn->prepare('INSERT INTO users (email, password) VALUES (?, ?)');
$stmt->bind_param('ss', $email, $userPassword);

// Execute the statement
if ($stmt->execute()) {
  // Return a success response
  $response = array(
    'success' => true
  );
  echo json_encode($response);
} else {
  // Return an error response
  $response = array(
    'success' => false,
    'message' => 'Failed to register: ' . $stmt->error
  );
  echo json_encode($response);
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
