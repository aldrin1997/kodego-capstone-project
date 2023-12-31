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
            <a class="nav-link fw-medium" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-medium" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-medium" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold text-success" href="contact.php">Contact</a>
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

  
  <main class="container boxed">
    <div class="row" style="margin-top: 50px;">
        <div class="col-sm-8 p-5">
            <h1 class="fw-bold display-4"><span class="brand_underline">Contact</span> Us</h1>
            <small class="fw-medium">Contact us any time. Our Agents are available 24/7 to assist you.</small>
            <div class="container mt-2 fw-medium">
                <form id="contact-form">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" placeholder="Enter message" rows="5"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-sm-4 p-5 bg-light">
            <h1 class="fw-bold display-4">MAC Lending</h1>
            <p><i class="fas fa-city"></i> 305 3/F Ayala Ave. Makati City</p>
            <p><i class="fas fa-envelope"></i> Email: MACLending.com</p>
            <p><i class="fas fa-phone"></i> Phone: +639260262030</p>
        </div>
    </div>
</main>

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
