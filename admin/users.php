<?php
session_start();
require_once 'dbconfig.php';

// Check if user is already logged in


// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate the submitted form data
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
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

            $stmt = $db->prepare("INSERT INTO admins (username, firstname, surname, address, age, birthday, email, password) 
            VALUES (:username, :firstname, :surname, :address, :age, :birthday, :email, :password)");
        
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':surname', $surname);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':birthday', $birthday);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->execute();

            // Display success message
            echo "<script>
                    window.onload = function() {
                      $('#successModal').modal('show');
                    }
                  </script>";
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
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>MAC Lending</title>
  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 20px;
}
	  .sidebar {
			height: 100%;
			width: 180px;
			position: fixed;
			top: 0;
			left: 0;
			background-color: #f8fcf3;
			overflow-x: hidden;
			padding-top: 20px;
		}

		.sidebar a {
			display: block;
			color: #000;
			padding: 16px;
			text-decoration: none;
			font-size: 18px;
		}

		.sidebar a:hover {
		
			color: #8ee69c;
		}
		

		.active {
			background-color: #f8fcf3;
			color: #333;
		}
		.content {
			background-color: #f8fcf3;
			margin-left: 200px;
			padding: 20px;
		}
</style>
<body>
<nav>
		<div class="sidebar">
			<img src="image/logo.png" width="200px" alt="logo" class="navbar">
			<a href="admin.php"><i class="fa fa-tachometer"></i> Dashboard</a>
			<a href="loanlist.php"><i class="fa fa-credit-card"></i> Loan List</a>
			<a href="users.php"><i class="fa-solid fa-users"></i> Users</a>
			<a href="logout.php" class="logout-btn"><i class="fa-sharp fa-solid fa-power-off"></i> Logout</a>
		</div>
	</nav>

  <div class="registration-card">
    <h2>Registration</h2>

    <form action="" method="POST">
    <div class="form-group">
        <label>Username:</label>
        <input type="text" name="username" required>
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
      <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" required>
      </div>
      <button type="submit" name="submit" class="register-button">Register</button>
    </form>
  </div>
  <br>
  <br>

  <!-- Success Modal -->
  <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="successModalLabel">Congratulations!</h5>
      </div>
      <div class="modal-body">
        <p>New user successfully registered.</p>
      </div>
      <div class="modal-footer">
      <button class="btn btn-success btn-sm mt-4" onclick="location.href='users.php'">close</button>
      </div>
    </div>
  </div>
</div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
  <script>
    $(document).ready(function() {
      if (window.location.search.includes('message=Registered+Successfully')) {
        $('#successModal').modal('show');
      }
    });
  </script>
</body>
</html>


