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
    $password = $_POST['password'];

    try {
        // Retrieve user data from the database
        $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Login successful, store the username in session
            $_SESSION['username'] = $username;
            header("Location: home.php");
            exit();
        } else {
            // Login failed, redirect to login page with error message
            header("Location: index.php?error=1");
            exit();
        }
    } catch (PDOException $e) {
        die("Login failed: " . $e->getMessage());
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
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <div class="navbar-brand">
        <img src="image/logo.png" width="300px" class="logo-image" alt="Logo">
      </div>
      <span class="logo-text">MAC Lending Inc.</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-success" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link btn btn-success" href="login.html">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    
    <div class="login-card">
        <h2>Login</h2>

        <?php if (isset($error)): ?>
            <span class="error-msg"><?php echo $error; ?></span>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="form-group">
                <label>Username:</label>
                <input type="username" name="user_name" required>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" class="login-button">Login</button>
        </form>
        <br>
        <p class="login-link" style="text-align: center;">Don't have an account? <a href="register.php" style="text-decoration: none; color: inherit;">Register</a></p>


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
            <a class="nav-link" href="index.php">Home</a>
          </div>
          <div class="footer-links">
            <a class="nav-link" href="about.php">About Us</a>
          </div>
          <div class="footer-links">
            <a class="nav-link" href="privacy.php">Privacy Policy</a>
          </div>
          <div class="footer-links">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </div>

        </div>
        <div class="footer-column">
          <div class="footer-links">
            <a class="nav-link" href="personal.php">Personal Loan</a>
          </div>
          <div class="footer-links">
            <a class="nav-link" href="salary.php">Salary Loan</a>
          </div>
          <div class="footer-links">
            <a class="nav-link" href="business.php">Small Business Loan</a>
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
