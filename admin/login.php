<?php
session_start();
require_once 'dbconfig.php';

// Check if user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
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
            header("Location: admin.php");
            exit();
        } else {
            // Login failed, redirect to login page with error message
            header("Location: admin.php?error=1");
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
    
    <div class="login-card">
        <h2 class="text-center">Administrator Login</h2>

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
    </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script>

  </script>
</body>
</html>
