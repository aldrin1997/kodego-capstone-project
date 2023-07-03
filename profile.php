<?php
// profile.php

// Start the session (assuming you have session management in place)
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect the user to the login page or display an error message
    header('Location: login.php');
    exit;
}

// Connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=loan_db', 'root', '');

// Prepare the query
$query = $pdo->prepare('SELECT * FROM users WHERE username = :username');

// Bind the parameter
$query->bindParam(':username', $_SESSION['username']);

// Execute the query
$query->execute();

// Fetch the user record
$user = $query->fetch(PDO::FETCH_ASSOC);

// Display the user profile information
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <title>MAC Lending</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
  .navbar-nav {
    flex-direction: column;
    align-items: center;
    margin-top: 1rem;
}

.nav-item {
    margin-bottom: 10px;
}

.nav-link {
    position: relative;
    color: #282828;
    text-decoration: none;
    margin: 3px;
    z-index: 1;
}

.centered-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.nav-link.active::after {
    content: "";
    position: absolute;
    bottom: 10px;
    left: 10%;
    width: 80%;
    height: 5px;
    background-color:#8ee69c;
    z-index: -1;
}

.brand_underline {
    position: relative;
    display: inline-block;
    z-index: 1;
}

.brand_underline::after {
    content: "";
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 100%;
    height: 15px;
    margin-bottom: 8px;
    background-color: #02F89C;
    z-index: -1;
}
nav li.user-icon {
    padding: 10px;
    background-color: #333;
}

nav li.user-icon img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
}
</style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <img src="image/logo.png" width="400px" class="navbar-brand p-2" href="index.html">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">MAC LENDING INC.</span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
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
                <li class="nav-item">
                  <a class="nav-link" href="loan_application.php">Apply for a Loan</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link mr-3  active" href="profile.php">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <h1>User Profile</h1>
    <p>Username: <?php echo $user['username']; ?></p>
    <p>Email: <?php echo $user['email']; ?></p>
    <p><a href="logout.php">Logout</a></p>
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
</body>
</html>
