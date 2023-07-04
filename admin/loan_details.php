<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Admin | Loan Management System</title>
</head>
<style>
  /* CSS styles for better viewing */
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
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

  .card {
    background-color: #F8FCF3;
    text-align: center;
    width: 500px;
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    margin: 0 auto;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
  }

  h2 {
    font-size: 24px;
    margin-bottom: 10px;
  }

  p {
    margin: 5px 0;
  }

  .wider-select select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #f9f9f9;
    color: #333;
    font-size: 14px;
    font-weight: bold;
  }

  .primary-color select {
    background-color: blue;
    color: blue;
  }
  .back-button {
    position: absolute;
    top: 20px;
    left: 20px;
    font-size: 14px;
    padding: 6px 12px;
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

  // Retrieve the id parameter from the URL
  $id = $_GET['id'];

  // SQL query to retrieve loan applicant details
  $sql = "SELECT * FROM loan_application WHERE id = $id";

  // Execute the query
  $result = $conn->query($sql);

  // Check if there is a result
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  ?>
    <div class="card">
    <a href="loanlist.php" class="btn btn-primary back-button"><i class="fa fa-arrow-left"></i> Back</a>
      <h2 class="text-center">Loan Applicant Details</h2>
      <p>Loan Applicant ID: <?php echo $row['id']; ?></p>
      <p>Name: <?php echo $row['first_name'] . ' ' . $row['middle_name'] . ' ' . $row['last_name']; ?></p>
      <!-- Display other details from the loan_application table -->
      <p>Birth Date: <?php echo $row['birth_date']; ?></p>
      <p>Status: <?php echo $row['status']; ?></p>
      <p>Gender: <?php echo $row['gender']; ?></p>
      <p>Email: <?php echo $row['email']; ?></p>
      <p>Contact Number: <?php echo $row['contact_number']; ?></p>
      <p>Employment Status: <?php echo $row['employment_status']; ?></p>
      <p>House No: <?php echo $row['house_no']; ?></p>
      <p>Street: <?php echo $row['street']; ?></p>
      <p>City: <?php echo $row['city']; ?></p>
      <p>Province: <?php echo $row['province']; ?></p>
      <p>Country: <?php echo $row['country']; ?></p>
      <p>Region: <?php echo $row['region']; ?></p>
      <p>Zip Code: <?php echo $row['zip_code']; ?></p>
      <p>Employer Name: <?php echo $row['employer_name']; ?></p>
      <p>Nature of Business: <?php echo $row['nature_of_business']; ?></p>
      <p>Job Title: <?php echo $row['job_title']; ?></p>
      <p>Length of Employment: <?php echo $row['length_of_employment']; ?></p>
      <p>Monthly Income: <?php echo $row['monthly_income']; ?></p>
      <p>Loan Amount: <?php echo $row['loan_amount']; ?></p>
      <p>Loan Purpose: <?php echo $row['loan_purpose']; ?></p>
      <p>Loan Term: <?php echo $row['loan_term']; ?></p>
      <p>Repayment Source: <?php echo $row['repayment_source']; ?></p>
      <p>Debt Type: <?php echo $row['debt_type']; ?></p>
      <p>Outstanding Balance: <?php echo $row['outstanding_balance']; ?></p>
      <p>Monthly Installment: <?php echo $row['monthly_installment']; ?></p>
      <p>Bank Name: <?php echo $row['bank_name']; ?></p>
      <p>Account Type: <?php echo $row['account_type']; ?></p>
      <p>Account Number: <?php echo $row['account_number']; ?></p>
      <p>Bank Relationship Length: <?php echo $row['bank_relationship_length']; ?></p>
      <p>Average Monthly Balance: <?php echo $row['average_monthly_balance']; ?></p>
      <p>How did you hear: <?php echo $row['how_did_you_hear']; ?></p>
      <p>Declared Bankruptcy: <?php echo $row['declared_bankruptcy']; ?></p>
      <p>Legal Judgments: <?php echo $row['legal_judgments']; ?></p>
      <p>Pending Legal Cases: <?php echo $row['pending_legal_cases']; ?></p>
      <p>Debt Consolidation: <?php echo $row['debt_consolidation']; ?></p>
      <p>Cosigner/Guarantor: <?php echo $row['cosigner_guarantor']; ?></p>
      <p>Declaration Checked: <?php echo $row['declaration_checked']; ?></p>
      <p>Created At: <?php echo $row['created_at']; ?></p>
      <p>Declaration: <?php echo $row['declaration']; ?></p>

      <div class="form-group">
  <label for="status" class="form-label">Status:</label>
  <div class="wider-select">
    <select class="form-select" id="status" name="status">
      <option value="Pending" <?php if ($row['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
      <option value="Approved" <?php if ($row['status'] == 'Approved') echo 'selected'; ?>>Approved</option>
      <option value="Rejected" <?php if ($row['status'] == 'Rejected') echo 'selected'; ?>>Rejected</option>
    </select>
  </div>
</div>
<br>
<button class="btn btn-primary submit-status-btn" data-id="<?php echo $row['id']; ?>">Submit Response</button>

<!-- ...Existing code... -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
 $(document).ready(function() {
    // Update the status on submit button click
    $('.submit-status-btn').click(function() {
      var id = $(this).data('id');
      var status = $('#status').val();
    
      $.ajax({
        url: 'update_status.php',
        type: 'POST',
        data: {
          id: id,
          status: status,
          isSubmitted: true
        },
        success: function(response) {
          alert(response); // Change this to display any useful message from the server
          window.location.reload();
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert('Status update failed');
        }
      });
    });
  });
</script>
  <?php
  } else {
    echo "No loan applicant found with ID " . $id;
  }

  $conn->close();
  ?>
</body>

</html>

