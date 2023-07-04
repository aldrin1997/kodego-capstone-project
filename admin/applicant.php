<!DOCTYPE html>
<html>
<head>
    <title>Loan Applicant Details</title>
    <style>
        body {
  padding: 20px; /* Adjust the padding value as needed */
  margin: 0;
  background-color: #f8fcf3;
}
        .loan-table {
            border-collapse: collapse;
            width: 100%;
        }

        .loan-table th,
        .loan-table td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        .loan-table th {
            background-color: #f2f2f2;
        }

        .loan-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .loan-table tr:hover {
            background-color: red;
        }
    </style>
</head>
<body>
<?php
// Connection details
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

// Fetch all loan applicant data
$sql = "SELECT * FROM loan_application";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<h1>Loan Applicant Details</h1>';

    echo '<table style="border-collapse: collapse;">';
    echo '<thead>';
    echo '<tr>';
    echo '<th style="border: 1px solid black;">Loan Applicant ID</th>';
    echo '<th style="border: 1px solid black;">User ID</th>';
    echo '<th style="border: 1px solid black;">Name</th>';
    echo '<th style="border: 1px solid black;">Birth Date</th>';
    echo '<th style="border: 1px solid black;">Status</th>';
    echo '<th style="border: 1px solid black;">Email</th>';
    echo '<th style="border: 1px solid black;">Contact Number</th>';
    echo '<th style="border: 1px solid black;">House Number</th>';
    echo '<th style="border: 1px solid black;">Street</th>';
    echo '<th style="border: 1px solid black;">City</th>';
    echo '<th style="border: 1px solid black;">Province</th>';
    echo '<th style="border: 1px solid black;">Country</th>';
    echo '<th style="border: 1px solid black;">Region</th>';
    echo '<th style="border: 1px solid black;">Zip Code</th>';
    echo '<th style="border: 1px solid black;">Employer Name</th>';
    echo '<th style="border: 1px solid black;">Nature of Business</th>';
    echo '<th style="border: 1px solid black;">Job Title</th>';
    echo '<th style="border: 1px solid black;">Length of Employment</th>';
    echo '<th style="border: 1px solid black;">Monthly Income</th>';
    echo '<th style="border: 1px solid black;">Loan Amount</th>';
    echo '<th style="border: 1px solid black;">Loan Purpose</th>';
    echo '<th style="border: 1px solid black;">Loan Term</th>';
    echo '<th style="border: 1px solid black;">Repayment Source</th>';
    echo '<th style="border: 1px solid black;">Debt Type</th>';
    echo '<th style="border: 1px solid black;">Outstanding Balance</th>';
    echo '<th style="border: 1px solid black;">Monthly Installment</th>';
    echo '<th style="border: 1px solid black;">Bank Name</th>';
    echo '<th style="border: 1px solid black;">Account Type</th>';
    echo '<th style="border: 1px solid black;">Account Number</th>';
    echo '<th style="border: 1px solid black;">Bank Relationship Length</th>';
    echo '<th style="border: 1px solid black;">Average Monthly Balance</th>';
    echo '<th style="border: 1px solid black;">How Did You Hear</th>';
    echo '<th style="border: 1px solid black;">Declared Bankruptcy</th>';
    echo '<th style="border: 1px solid black;">Legal Judgments</th>';
    echo '<th style="border: 1px solid black;">Pending Legal Cases</th>';
    echo '<th style="border: 1px solid black;">Debt Consolidation</th>';
    echo '<th style="border: 1px solid black;">Cosigner Guarantor</th>';
    echo '<th style="border: 1px solid black;">Declaration Checked</th>';
    echo '<th style="border: 1px solid black;">Created At</th>';
    echo '<th style="border: 1px solid black;">Declaration</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = $result->fetch_assoc()) {

        echo '<td style="border: 1px solid black;">' . $row["id"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["user_id"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["first_name"] . ' ' . $row["middle_name"] . ' ' . $row["last_name"] . '</td>';
        echo '<td style="border: "1px solid black;">' . $row["birth_date"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["status"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["email"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["contact_number"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["house_no"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["street"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["city"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["province"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["country"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["region"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["zip_code"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["employer_name"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["nature_of_business"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["job_title"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["length_of_employment"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["monthly_income"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["loan_amount"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["loan_purpose"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["loan_term"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["repayment_source"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["debt_type"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["outstanding_balance"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["monthly_installment"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["bank_name"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["account_type"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["account_number"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["bank_relationship_length"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["average_monthly_balance"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["how_did_you_hear"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["declared_bankruptcy"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["legal_judgments"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["pending_legal_cases"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["debt_consolidation"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["cosigner_guarantor"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["declaration_checked"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["created_at"] . '</td>';
        echo '<td style="border: 1px solid black;">' . $row["declaration"] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo "No loan applicants found.";
}

// Close connection
$conn->close();
?>
</body>
</html>

