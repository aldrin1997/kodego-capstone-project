<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}
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
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <div class="navbar-brand">
        <img src="image/logo.png" width="300px" class="logo-image" alt="Logo">
      </div>
      <span class="logo-text d-flex font-size-responsive">MAC Lending Inc.</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link fw-bold text-success" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-medium" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-medium" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-medium" href="contact.php">Contact</a>
          </li>
          
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link fw-medium btn btn-success" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="hero-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h5 class="text-success">Achieve your financial goal</h5>
          <h1>Small Business</h1>
          <h1>Loan for daily</h1>
          <h1>Expenses.</h1>
          <p>At MAC Lending, our vision is to provide fast approved loans for all types of individuals who are in need of quick financial assistance. We understand that sometimes life throws unexpected challenges our way, and having access to immediate funds can make a significant difference.</p>
          <button class="btn btn-success btn-sm mt-4" onclick="location.href='login.php'">Apply for Loan</button>
        </div>
        <div class="col-lg-6">
          <img src="image/image1.png" alt="lending money" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
<br>
<br>

<section class="about-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-success">About Our Company</h5>
        <h3>Building a Brighter financial</h3>
        <h3>Future & Good Support.</h3>
        <p>Our mission is to make the borrowing process as seamless and efficient as possible. We believe that everyone deserves equal opportunities when it comes to accessing financial support. Therefore, regardless of your credit history or financial background, we strive to offer fast loan approvals to all eligible applicants.</p>
        <button class="btn btn-success btn-sm mt-4" onclick="location.href='login.php'">Apply for Loan</button>
        
      </div>
      <div class="col-lg-6">
        <img src="image/image2.png" alt="lending money" class="img-fluid">
      </div>
    </div>
  </div>
</section>
<br>
<br>

<section class="services-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-success">Services that we are providing</h5>
        <h3>Building a Brighter financial</h3>
        <h3>Future & Good Support.</h3>
        <p>With our streamlined application process, you can apply for a loan with ease. Simply visit our website or reach out to our dedicated customer service team, and we'll guide you through the necessary steps. We have simplified the documentation requirements to expedite the approval process, allowing you to receive the funds you need quickly.</p>
        <button class="btn btn-success btn-sm mt-4" onclick="location.href='login.php'">Apply for Loan</button>
      </div>
      <div class="col-lg-6">
        <img src="image/image3.png" alt="lending money" class="img-fluid">
      </div>
      </div>
  </div>
</section>
<br>
<br>

<div class="card-container">
  <div class="card">
    <img src="image/image4.png" alt="Personal Loan" class="img-fluid">
    <h5>Personal Loan</h5>
    <button class="btn btn-success btn-sm">Apply Now!</button>
  </div>
  <div class="card">
    <img src="image/image5.png" alt="Salary Loan" class="img-fluid">
    <h5>Salary Loan</h5>
    <button class="btn btn-success btn-sm">Apply Now!</button>
  </div>
  <div class="card">
    <img src="image/image6.png" alt="Small Business Loan" class="img-fluid">
    <h5>Small Business Loan</h5>
    <button type="btn" href="loan_application.php" class="btn btn-success btn-sm">Apply Now!</button>
  </div>
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
        <div class="footer-column fw-medium">
          <h5>MAC Lending Inc.</h5>
          <p>Unit 305 3/F 6276<br>National Life Insurance Bldg.<br>San Lorenzo, Ayala Ave. Makati City</p>
        </div>
        
        <div class="footer-column">
          <div class="footer-links">
            <a class="nav-link fw-medium" href="index.php">Home</a>
          </div>
          <div class="footer-links">
            <a class="nav-link fw-medium" href="about.php">About Us</a>
          </div>
          <div class="footer-links">
            <a class="nav-link fw-medium" href="privacy.php">Privacy Policy</a>
          </div>
          <div class="footer-links">
            <a class="nav-link fw-medium" href="contact.php">Contact Us</a>
          </div>

        </div>
        <div class="footer-column">
          <div class="footer-links">
            <a class="nav-link fw-medium" href="personal.php">Personal Loan</a>
          </div>
          <div class="footer-links">
            <a class="nav-link fw-medium" href="salary.php">Salary Loan</a>
          </div>
          <div class="footer-links">
            <a class="nav-link fw-medium" href="business.php">Small Business Loan</a>
          </div>
        </div>
        
        <div class="footer-column">
          <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank">
              <i class="fab fa-facebook"></i>
              <span class="fw-medium">Facebook</span>
            </a>
          </div>
          <div class="social-icons">
            <a href="https://www.twitter.com" target="_blank">
              <i class="fab fa-twitter"></i>
              <span class="fw-medium">Twitter</span>
            </a>
          </div>
          <div class="social-icons">
            <a href="https://www.instagram.com" target="_blank">
              <i class="fab fa-instagram"></i>
              <span class="fw-medium">Instagram</span>
            </a>
          </div>
        
        </div>
      </div>
    </div>
  </div>
</footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>

