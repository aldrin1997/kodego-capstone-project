<?php
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

// Update user profile photo if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a file is uploaded
    if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] === 0) {
        $targetDir = 'uploads/';
        $targetFile = $targetDir . basename($_FILES['profile_photo']['name']);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if the file is an actual image
        $check = getimagesize($_FILES['profile_photo']['tmp_name']);
        if ($check !== false) {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $targetFile)) {
                // Update the profile photo path in the database
                $updateQuery = $pdo->prepare('UPDATE users SET profile_photo = :profile_photo WHERE username = :username');
                $updateQuery->bindParam(':profile_photo', $targetFile);
                $updateQuery->bindParam(':username', $_SESSION['username']);
                $updateQuery->execute();

                // Redirect to the profile page to see the updated photo
                header('Location: profile.php');
                exit;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Please upload a valid image file.";
        }
    }
}

// Fetch the loan history from the loan_application table
$loanQuery = $pdo->prepare('SELECT * FROM loan_application WHERE user_id = :user_id');
$loanQuery->bindParam(':user_id', $user['id']);
$loanQuery->execute();
$loanHistory = $loanQuery->fetchAll(PDO::FETCH_ASSOC);

// Define an array to map the loan status ID to its respective text
$loanStatusText = array(
    1 => "Pending",
    2 => "Approved",
    3 => "Rejected"
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <title>Profile</title>

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
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            border-radius: 50%;
            background-color: #313131;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            padding-top: 100px; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.9); 
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 400px;
            border-radius: 50%;
            background-color: #313131;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 400px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        .modal-content, #caption {  
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }
        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)} 
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)} 
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
            width: 100%;
            }
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img src="image/logo.png" width="150px" class="navbar-brand p-2" href="index.html">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">MAC LENDING INC.</span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loan_application.php">Apply for a Loan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-3  active" href="#">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="main container-fluid">
        <div class="row">
            <div class="col-md-12">
            <form method="POST" action="profile.php" enctype="multipart/form-data">
            <h2>Profile</h2>
            <?php if ($user['profile_photo']): ?>
              <img src="<?php echo $user['profile_photo']; ?>" alt="Profile Photo" class="profile-photo">
    <?php else: ?>
        <p>No profile photo found.</p>
    <?php endif; ?>
    <br>

                
                <p><strong>Username:</strong> <?php echo $user['username']; ?></p>
<p><strong>Email:</strong> <?php echo $user['email']; ?></p>

    

        <div class="mb-3">
            <label for="first_name" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $user['first_name'] ?>">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Surname:</label>
            <input type="text" class="form-control" id="surname" name="surname" value="<?php echo $user['surname'] ?>">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo $user['address'] ?>">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="number" class="form-control" id="age" name="age" value="<?php echo $user['age'] ?>">
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday:</label>
            <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $user['birthday'] ?>">
        </div>
        <div class="mb-3">
            <label for="profile_photo" class="form-label">Profile Photo:</label>
            <input type="file" class="form-control" id="profile_photo" name="profile_photo">
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
    <br>
            <div class="card-container mb-3">
                <div class="card">
                    <img src="image/image8.jpg" alt="Loan History" class="img-fluid">
                    <h5>Loan History</h5>
                    <button class="btn btn-success btn-sm">See loan history</button>
                </div>
                <div class="card">
                    <img src="image/image9.png" alt="Loan Status" class="img-fluid">
                    <h5>Loan Status</h5>
                    <button class="btn btn-success btn-sm">See loan status</button>
                </div>
                <div class="card">
                    <img src="image/image10.jpeg" alt="Loan Payment" class="img-fluid">
                    <h5>Loan Payment</h5>
                    <button class="btn btn-success btn-sm">Pay Loan</button>
                </div>
            </div>
            <a href="logout.php">Logout</a>
        </div>
    </div>

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
    <script>
        var modal = document.getElementById("myModal");
        
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        
        var span = document.getElementsByClassName("close")[0];
        
        span.onclick = function() { 
          modal.style.display = "none";
        }
      </script>
</body>
</html>