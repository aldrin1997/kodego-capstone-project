<?php
if (isset($_POST['submit'])) {
// Database connection details
$hostname = 'localhost'; // Replace with database hostname
$username = 'root'; // Replace with database username
$password = ''; // Replace with database password
$database = 'loan_db'; // Replace with database name

// Create a new PDO instance
$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $firstName = $_POST['fname'];
    $middleName = $_POST['middlename'];
    $lastName = $_POST['lastname'];
    $birthDate = $_POST['DOB'];
    $status = $_POST['status'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contactNumber = $_POST['phone'];
    $employmentStatus = $_POST['employment'];
    $houseNo = $_POST['hnum'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $country = $_POST['country'];
    $region = $_POST['region'];
    $zipcode = $_POST['zipcode'];
    $employerName = $_POST['ename'];
    $natureOfBusiness= $_POST['nb'];
    $jobTitle = $_POST['jtitle'];
    $lengthOfEmployment = $_POST['empLength'];
    $monthlyIncome = $_POST['mincome'];
    $loanAmount = $_POST['loanAmount'];
    $loanPurpose = $_POST['loanPurpose'];
    $loanTerm = $_POST['loanTerm'];
    $repaymentSource = $_POST['paymentSource'];
    $debtType = $_POST['debtType'];
    $outstandingBalance = $_POST['oBal'];
    $monthlyInstallment = $_POST['monthlyInstallment'];
    $bankName = $_POST['bankName'];
    $accountType = $_POST['accType'];
    $accountNumber = $_POST['accNum'];
    $bankRelationshipLength = $_POST['bankRs'];
    $averageMonthlyBalance = $_POST['averageBal'];
    $howDidYouHear = $_POST['info1'];
    $declaredBankruptcy = $_POST['info2'];
    $legalJudgments = $_POST['info3'];
    $pendingLegalCases = $_POST['info4'];
    $debtConsolidation = $_POST['info5'];
    $coSigner = $_POST['info6'];

    // Prepare and execute the SQL statement to insert the data into the database
    $stmt = $conn->prepare("INSERT INTO loan_application (firstName, middleName, lastName, birthDate, status, gender, email, contactNumber, employmentStatus, houseNo, street, city, province, country, region, zipCode, employerName, natureOfBusiness, jobTitle, lengthOfEmployment, monthlyIncome, loanAmount, loanPurpose, loanTerm, repaymentSource, debtType, outstandingBalance, monthlyInstallment, bankName, accountType, accountNumber, bankRelationshipLength, averageMonthlyBalance, howDidYouHear, declaredBankruptcy, legalJudgments, pendingLegalCases, debtConsolidation, coSigner) VALUES (:fname, :middlename, :lastname, :DOB, :status, :gender, :email, :phone, :employment, :hnum, :street, :city, :province, :country, :region, :zipcode, :ename, :nb, :jtitle, :empLength, :mincome, :loanAmount, :loanPurpose, :loanTerm, :paymentSource, :debtType, :oBal, :monthlyInstallment, :bankName, :accType, :accNum, :bankRs, :averageBal, :info1, :info2, :info3, :info4, :info5, :info6)");

    $stmt->bindParam(':fname', $firstName);
    $stmt->bindParam(':middlename', $middleName);
    $stmt->bindParam(':lastname', $lastName);
    $stmt->bindParam(':DOB', $birthDate);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $contactNumber);
    $stmt->bindParam(':employment', $employmentStatus);
    $stmt->bindParam(':hnum', $houseNo);
    $stmt->bindParam(':street', $street);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':province', $province);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':region', $region);
    $stmt->bindParam(':zipcode', $zipCode);
    $stmt->bindParam(':ename', $employerName);
    $stmt->bindParam(':nb', $natureOfBusiness);
    $stmt->bindParam(':jtitle', $jobTitle);
    $stmt->bindParam(':empLength', $lengthOfEmployment);
    $stmt->bindParam(':mincome', $monthlyIncome);
    $stmt->bindParam(':loanAmount', $loanAmount);
    $stmt->bindParam(':loanPurpose', $loanPurpose);
    $stmt->bindParam(':loanTerm', $loanTerm);
    $stmt->bindParam(':paymentSource', $repaymentSource);
    $stmt->bindParam(':debtType', $debtType);
    $stmt->bindParam(':oBal', $outstandingBalance);
    $stmt->bindParam(':monthlyInstallment', $monthlyInstallment);
    $stmt->bindParam(':bankName', $bankName);
    $stmt->bindParam(':accType', $accountType);
    $stmt->bindParam(':accNum', $accountNumber);
    $stmt->bindParam(':bankRs', $bankRelationshipLength);
    $stmt->bindParam(':averageBal', $averageMonthlyBalance);
    $stmt->bindParam(':info1', $howDidYouHear);
    $stmt->bindParam(':info2', $declaredBankruptcy);
    $stmt->bindParam(':info3', $legalJudgments);
    $stmt->bindParam(':info4', $pendingLegalCases);
    $stmt->bindParam(':info5', $debtConsolidation);
    $stmt->bindParam(':info6', $coSigner);

    $stmt->execute();

    // Redirect to a success page
    header('Location: success.php');
    exit;
}
}
?>