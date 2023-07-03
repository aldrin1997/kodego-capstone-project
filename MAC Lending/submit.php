<?php
if(isset($_POST['submit'])){
// Establish a database connection (replace the placeholders with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loan_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$data = array(
// Retrieve the form data
$firstname = $_POST['fname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['DOB'];
$status = $_POST['status'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$employment = $_POST['employment'];
$hnum = $_POST['hnum'];
$street = $_POST['street'];
$city = $_POST['city'];
$province = $_POST['province'];
$country = $_POST['country'];
$region = $_POST['region'];
$zipcode = $_POST['zipcode'];
$ename = $_POST['ename'];
$nb = $_POST['nb'];
$jtitle = $_POST['jtitle'];
$empLength = $_POST['empLength'];
$mincome = $_POST['mincome'];
$loanAmount = $_POST['loanAmount'];
$loanPurpose = $_POST['loanPurpose'];
$loanTerm = $_POST['loanTerm'];
$paymentSource = $_POST['paymentSource'];
$debtType = $_POST['debtType'];
$oBal = $_POST['oBal'];
$monthlyInstallment = $_POST['monthlyInstallment'];
$bankName = $_POST['bankName'];
$accType = $_POST['accType'];
$accNum = $_POST['accNum'];
$bankRs = $_POST['bankRs'];
$averageBal = $_POST['averageBal'];
$info1 = $_POST['info1'];
$info2 = $_POST['info2'];
$info3 = $_POST['info3'];
$info4 = $_POST['info4'];
$info5 = $_POST['info5'];
$info6 = $_POST['info6'];
$user_id => $_POST['user_id']);

// Prepare and execute the SQL statement to insert the data into the database
$stmt = $conn->prepare("INSERT INTO loan_application (firstName, middleName, lastName, birthDate, status, gender, email, contactNumber, employmentStatus, houseNo, street, city, province, country, region, zipCode, employerName, natureOfBusiness, jobTitle, lengthOfEmployment, monthlyIncome, loanAmount, loanPurpose, loanTerm, paymentSource, debtType, loanAmount, monthlyInstallment, bankName, accountType,accountNumber, accountNumber, accountNumber,howDidYouHear, declaredBankruptcy,legalJudgments,pendingLegalCases,debtConsolidation,coSigner) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssssssssssssssssssssssss", $firstname, $middlename, $lastname, $birthdate, $status, $gender, $email, $phone, $employment, $hnum, $street, $city, $province, $country, $region, $zipcode, $ename, $nb, $jtitle, $empLength, $mincome, $loanAmount, $loanPurpose, $loanTerm, $paymentSource, $debtType, $oBal, $monthlyInstallment, $bankName, $accType, $accNum, $bankRs, $averageBal, $info1, $info2, $info3, $info4, $info5, $info6,user_id);


$result = $stmt->execute();

if ($result) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
}

