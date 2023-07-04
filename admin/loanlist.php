<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Admin | Loan Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            display: flex; /* Added */
            flex-wrap: wrap; /* Added */
            justify-content: flex-start; /* Added */
        }

        .card {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            background: #f9f9f9;
            margin-right: 10px; /* Added */
        }

        h2 {
            margin-top: 0;
        }

        .details {
            width: 500px;
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            background: #f9f9f9;
        }

        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <nav>
		<div class="sidebar">
			<img src="image/logo.png" width="200px" alt="logo" class="navbar">
			<a href="admin.php"><i class="fa fa-tachometer"></i> Dashboard</a>
			<a href="loanlist.php"><i class="fa fa-credit-card fw-bold"></i> Loan List</a>
			<a href="payments.php" class="active fw-medium"><i class="fa fa-money-check"></i> Payments</a>
			<a href="loanplans.php"><i class="fa-solid fa-coins"></i> Loan Plans</a>
			<a href="loantypes.php"><i class="fa fa-chart-line"></i> Loan types</a>
			<a href="borrowers.php"><i class="fa-solid fa-hand-holding-dollar"></i> Borrowers</a>
			<a href="users.php"><i class="fa-solid fa-users"></i> Users</a>
			<a href="logout.php" class="logout-btn"><i class="fa-sharp fa-solid fa-power-off"></i> Logout</a>
		</div>
	</nav>
<div class="content">
    <?php
    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loan_db";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve loan applicants
    $sql = "SELECT id, CONCAT(first_name, ' ', middle_name, ' ', last_name) AS name, email FROM loan_application";

    // Execute the query
    $result = $conn->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Loop through each row of data
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="card">
                <h3><?php echo $row['name']; ?></h3>
                <p>Loan Applicant ID: <?php echo $row['id']; ?></p>
                <p>Email: <?php echo $row['email']; ?></p>
                <a href="loan_details.php?id=<?php echo $row['id']; ?>">View Details</a>
            </div>
            <?php
        }
    } else {
        echo "No loan applicants found.";
    }

    // Close the connection
    $conn->close();
    ?>
</div>
</body>
</html>
