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
    $username = $_POST['user_name'];
    $firstName = $_POST['first_name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // You can add additional validation checks here

    try {
        // Check if the email already exists in the database
        $stmt = $db->prepare("SELECT COUNT(*) AS count FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result['count'] > 0) {
            $error = "Email already registered. Please choose a different email.";
        } else {
            // Insert user into the database
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $db->prepare("INSERT INTO users (username, first_name, surname, address, age, birthday, email, password) 
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

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <div class="navbar-brand">
        <img src="image/logo.png" width="400px" class="logo-image" alt="Logo">
        <span class="logo-text">MAC Lending Inc.</span>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-success" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link btn btn-success" href="login.html">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="registration-card">
    <h2>Registration</h2>

    <form action="" method="POST">
    <div class="form-group">
        <label>Username:</label>
        <input type="text" name="user_name" required>
      </div>
      <div class="form-group">
        <label>First Name:</label>
        <input type="text" name="first_name" required>
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
      <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" required>
      </div>
      <button type="submit" name="submit" class="register-button">Register</button>
    </form>
    <p class="login-link">Already have an account? <a href="login.php">Login</a></p>
  </div>
  <br>
  <br>

  <footer class="footer">
    <div class="container">
      <div class="footer-row">
        <div class="footer-logo">
          <img src="image/logo.png" alt="Logo" class="img-fluid">
        </div>
        <div class="footer-columns">
          <div class="footer-column">
            <h5>MAC Lending Inc.</h5>
            <p>Unit 305 3/F 6276 National Life Insurance Bldg. San Lorenzo, Ayala Ave. Makati City</p>
          </div>

          <div class="footer-column">
            <div class="footer-links">
              <a class="nav-link" href="index.html">Home</a>
            </div>
            <div class="footer-links">
              <a class="nav-link" href="index.html">About Us</a>
            </div>
            <div class="footer-links">
              <a class="nav-link" href="index.html">Privacy Policy</a>
            </div>
            <div class="footer-links">
              <a class="nav-link" href="index.html">Contact Us</a>
            </div>

          </div>
          <div class="footer-column">
            <div class="footer-links">
              <a class="nav-link" href="index.html">Personal Loan</a>
            </div>
            <div class="footer-links">
              <a class="nav-link" href="index.html">Salary Loan</a>
            </div>
            <div class="footer-links">
              <a class="nav-link" href="index.html">Small Business Loan</a>
            </div>
          </div>

          <div class="footer-column">
            <div class="social-icons">
              <a href="https://www.facebook.com" target="_blank">
                <i class="fab fa-facebook"></i>
                <span>Facebook</span>
              </a>
            </div>
            <div class="social-icons">
              <a href="https://www.twitter.com" target="_blank">
                <i class="fab fa-twitter"></i>
                <span>Twitter</span>
              </a>
            </div>
            <div class="social-icons">
              <a href="https://www.instagram.com" target="_blank">
                <i class="fab fa-instagram"></i>
                <span>Instagram</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script>


  </script>
</body>
</html>
