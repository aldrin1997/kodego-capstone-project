
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
  <style>
    .agent-circle {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      object-fit: cover;
  }
  </style>
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
            <a class="nav-link fw-medium" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold text-success" href="about.php">About</a>
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

  <div class="container mt-5 mb-5">
        <h1 class="text-center fw-bold display-5">About Us</h1>
        <p class="mt-3 text-center fs-6 fw-medium">
          At <b>MAC Lending</b>, we are dedicated to providing reliable and accessible financial <br>solutions to individuals 
          and businesses. With a strong commitment to transparency, integrity, and customer satisfaction, <br>we strive to 
          empower our clients with the financial resources they need to achieve their goals and dreams.
        </p>

        <div class="row mt-5">

            <div class="col-md-4 mb-5 mt-2">
                <div class="text-center"> <!-- Add text-center class here -->
                    <img src="image/AC.png" alt="Agent 2" class="agent-circle">
                    <h3 class="mt-3 fs-2">Aldrin Cardeño</h3>
                    <p class="fs-6 text-center fw-medium">Admin</p>
                </div>
            </div>

            <div class="col-md-4 mb-5 mt-2">
                <div class="text-center"> <!-- Add text-center class here -->
                    <img src="image/CM.jpg" alt="Agent 3" class="agent-circle">
                    <h3 class="mt-3 fs-2">Catherine Monsales</h3>
                    <p class="fs-6 text-center fw-medium">Admin</p>
                </div>
            </div>

            <div class="col-md-4 mb-5 mt-2">
                <div class="text-center"> <!-- Add text-center class here -->
                    <img src="image/MP.png" alt="Agent 4" class="agent-circle">
                    <h3 class="mt-3 fs-2">Melvin Pelegrina</h3>
                    <p class="fs-6 text-center fw-medium">Admin</p>
                </div>
            </div>
        </div>

    </div>

  <section class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="text-success fw-bold text-center">Mission</h1>
          <h4 class="text-center">Building a Brighter financial</h4>
          <h4 class="text-center">Future & Good Support.</h4>
          <p class="fw-medium">Our mission is to be the trusted partner for individuals and businesses seeking financial assistance. We aim to simplify the 
            lending process, offering a wide range of loan options and personalized solutions tailored to our customers' unique needs. We 
            are dedicated to fostering financial well-being and helping our clients make informed decisions about their borrowing needs.</p>
          
          
        </div>
        <div class="col-lg-6">
          <img src="image/image11.jpg" alt="lending money" class="img-fluid rounded">
        </div>
      </div>
    </div>
    
  </section>
  <br>
  <br>
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
    </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

