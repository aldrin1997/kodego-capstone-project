<?php
session_start();
require_once 'dbconfig.php';

// Check if user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate the submitted form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstName = $_POST['firstname'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    

    // You can add additional validation checks here

    try {
        // Check if the email already exists in the database
        $stmt = $db->prepare("SELECT COUNT(*) AS count FROM admins WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result['count'] > 0) {
            $error = "Email already registered. Please choose a different email.";
        } else {
            // Insert user into the database
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $db->prepare("INSERT INTO admins (username, firstname, surname, address, age, birthday, email, password) 
                VALUES (:username, :firstName, :surname, :address, :age, :birthday, :email, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':surname', $surname);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':birthday', $birthday);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->execute();

            // Redirect to login page with success message
            header("Location: login.php?message=Registered Successfully");
            exit();
        }
    } catch (PDOException $e) {
        die("Registration failed: " . $e->getMessage());
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <title>MAC Lending</title>
  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

  <div class="registration-card">
    <h2>Registration</h2>

    <form action="" method="POST">
    <div class="form-group">
        <label>Username:</label>
        <input type="text" name="username" required>
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" required>
      </div>
      <div class="form-group">
        <label>First Name:</label>
        <input type="text" name="firstname" required>
      </div>
      <div class="form-group">
        <label>Surname:</label>
        <input type="text" name="surname" required>
      </div>
      <div class="form-group">
        <label>Address:</label>
        <input type="text" name="address" required>
      </div>
      <div class="form-group">
        <label>Age:</label>
        <input type="number" name="age" required>
      </div>
      <div class="form-group">
        <label>Birthday:</label>
        <input type="date" name="birthday" required>
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" required>
      </div>

      <button type="submit" name="submit" class="register-button">Register</button>
    </form>
    <p class="login-link">Already have an account? <a href="login.php">Login</a></p>
  </div>
  <br>
  <br>

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script>


  </script>
</body>
</html>
