<?php

// Define your database connection details
$host = 'localhost';
$db = 'loan_db';
$user = 'root';
$password = '';

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error: " . $e->getMessage());
}

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Validate and sanitize user input

    // Personal details
    $firstName = $_POST['first_name'];
    $middleName = $_POST['middle_name'];
    $lastName = $_POST['last_name'];
    $birthDate = $_POST['birth_date'];
    $status = $_POST['status'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contact_number'];

    // Employment details
    $employmentStatus = $_POST['employment_status'];
    $houseNo = $_POST['house_no'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $country = $_POST['country'];
    $region = $_POST['region'];
    $zipCode = $_POST['zip_code'];
    $employerName = $_POST['employer_name'];
    $natureOfBusiness = $_POST['nature_of_business'];
    $jobTitle = $_POST['job_title'];
    $lengthOfEmployment = $_POST['length_of_employment'];
    $monthlyIncome = $_POST['monthly_income'];

    // Loan details
    $loanAmount = $_POST['loan_amount'];
    $loanPurpose = $_POST['loan_purpose'];
    $loanTerm = $_POST['loan_term'];
    $repaymentSource = $_POST['repayment_source'];
    $debtType = $_POST['debt_type'];
    $outstandingBalance = $_POST['outstanding_balance'];
    $monthlyInstallment = $_POST['monthly_installment'];

    // Bank details
    $bankName = $_POST['bank_name'];
    $accountType = $_POST['account_type'];
    $accountNumber = $_POST['account_number'];
    $bankRelationshipLength = $_POST['bank_relationship_length'];
    $averageMonthlyBalance = $_POST['average_monthly_balance'];

    // Other details
    $howDidYouHear = $_POST['how_did_you_hear'];
    $declaredBankruptcy = $_POST['declared_bankruptcy'];
    $legalJudgments = $_POST['legal_judgments'];
    $pendingLegalCases = $_POST['pending_legal_cases'];
    $debtConsolidation = $_POST['debt_consolidation'];
    $cosignerGuarantor = $_POST['cosigner_guarantor'];
    $declarationChecked = isset($_POST['declaration_checked']) ? 1 : 0;

    // Prepare and execute the SQL query
    $sql = "INSERT INTO loan_application (user_id, first_name, middle_name, last_name, birth_date, status, gender, email, contact_number, employment_status, house_no, street, city, province, country, region, zip_code, employer_name, nature_of_business, job_title, length_of_employment, monthly_income, loan_amount, loan_purpose, loan_term, repayment_source, debt_type, outstanding_balance, monthly_installment, bank_name, account_type, account_number, bank_relationship_length, average_monthly_balance, how_did_you_hear, declared_bankruptcy, legal_judgments, pending_legal_cases, debt_consolidation, cosigner_guarantor, declaration_checked) 
    VALUES (:user_id, :first_name, :middle_name, :last_name, :birth_date, :status, :gender, :email, :contact_number, :employment_status, :house_no, :street, :city, :province, :country, :region, :zip_code, :employer_name, :nature_of_business, :job_title, :length_of_employment, :monthly_income, :loan_amount, :loan_purpose, :loan_term, :repayment_source, :debt_type, :outstanding_balance, :monthly_installment, :bank_name, :account_type, :account_number, :bank_relationship_length, :average_monthly_balance, :how_did_you_hear, :declared_bankruptcy, :legal_judgments, :pending_legal_cases, :debt_consolidation, :cosigner_guarantor, :declaration_checked)";

    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':user_id', $userId); // Replace $userId with the corresponding user ID from your authentication system
    $stmt->bindParam(':first_name', $firstName);
    $stmt->bindParam(':middle_name', $middleName);
    $stmt->bindParam(':last_name', $lastName);
    $stmt->bindParam(':birth_date', $birthDate);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':contact_number', $contactNumber);
    $stmt->bindParam(':employment_status', $employmentStatus);
    $stmt->bindParam(':house_no', $houseNo);
    $stmt->bindParam(':street', $street);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':province', $province);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':region', $region);
    $stmt->bindParam(':zip_code', $zipCode);
    $stmt->bindParam(':employer_name', $employerName);
    $stmt->bindParam(':nature_of_business', $natureOfBusiness);
    $stmt->bindParam(':job_title', $jobTitle);
    $stmt->bindParam(':length_of_employment', $lengthOfEmployment);
    $stmt->bindParam(':monthly_income', $monthlyIncome);
    $stmt->bindParam(':loan_amount', $loanAmount);
    $stmt->bindParam(':loan_purpose', $loanPurpose);
    $stmt->bindParam(':loan_term', $loanTerm);
    $stmt->bindParam(':repayment_source', $repaymentSource);
    $stmt->bindParam(':debt_type', $debtType);
    $stmt->bindParam(':outstanding_balance', $outstandingBalance);
    $stmt->bindParam(':monthly_installment', $monthlyInstallment);
    $stmt->bindParam(':bank_name', $bankName);
    $stmt->bindParam(':account_type', $accountType);
    $stmt->bindParam(':account_number', $accountNumber);
    $stmt->bindParam(':bank_relationship_length', $bankRelationshipLength);
    $stmt->bindParam(':average_monthly_balance', $averageMonthlyBalance);
    $stmt->bindParam(':how_did_you_hear', $howDidYouHear);
    $stmt->bindParam(':declared_bankruptcy', $declaredBankruptcy);
    $stmt->bindParam(':legal_judgments', $legalJudgments);
    $stmt->bindParam(':pending_legal_cases', $pendingLegalCases);
    $stmt->bindParam(':debt_consolidation', $debtConsolidation);
    $stmt->bindParam(':cosigner_guarantor', $cosignerGuarantor);
    $stmt->bindParam(':declaration_checked', $declarationChecked);

    // Execute the statement
    try {
        $stmt->execute();
        echo "Loan application submitted successfully.";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
<!-- HTML form for the loan application -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>MAC Lending</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
        .navbar-nav {
            display: flex;
            justify-content: flex-end;
            list-style-type: none;
            padding: 0;
        }
        
        .navbar-nav li {
            margin-right: 10px;
        }
        
        .navbar-nav li:last-child {
            margin-right: 0;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }
        
        .logo-image {
            margin-right: 10px;
        }
        
        .logo-text {
            font-weight: bold;
        }

        .logo-text {
            font-weight: bold;
            color: #28a745;
            font-size: 2.1em;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img src="image/logo.png" width="300px" class="navbar-brand p-2" href="index.html">
            <span class="logo-text">MAC Lending Inc.</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ml-auto">
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
                        <a class="nav-link fw-medium" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fw-bold text-success" href="loan_application.php">Apply for a Loan</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link mr-3 fw-medium" href="profile.php">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content container">
            <div class="row">
                <div class="text-center">
                    <h1 class="fw-bold">Application Form</h1>
                </div>
            <hr>
            <form method="POST" action="">
                <!-- Personal details -->
                <div class="col-md-12">
                        <h3 class="fw-bold">Personal Information</h3>
                        <div class="row g-3">
                            <div class="col-md-4 mb-3">
                                <label for="first_name" class="form-label fw-medium">First Name</label>
                                <input type="text" name="first_name" placeholder="First Name" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="middle_name" class="form-label fw-medium">Middle Name</label>
                                <input type="text" name="middle_name" placeholder="Middle Name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="last_name" class="form-label fw-medium">Last Name</label>
                                <input type="text" name="last_name" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="birthdate" class="form-label fw-medium">Date of Birth</label>
                                <input type="date" class="form-control form-control-sm" name="birth_date" required>
                            </div>
                            <div class="col-md-4 mb-3 fw-medium">
                                <label for="status">Status</label>
                                    <select class="form-select form-select-sm" name="status" required>
                                    <option value="">Select</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="divorced">Divorced</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3 fw-medium">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select form-select-sm" name="gender" required>
                                    <option value="">Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <form>
                                    <label for="email" class="form-label fw-medium">Email</label>
                                    <input type="text" class="form-control form-control-sm" name="email" required>
                                </form>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="contact_number" class="form-label fw-medium">Contact No.</label>
                                <input type="text" name="contact_number" placeholder="contact no." required>
                            </div>
                        
                            <div class="col-md-4">
                                <label for="employment" class="form-label fw-medium">Employment Status</label>
                                <select class="form-select form-select-sm" name="employment_status" required>
                                    <option value="">Select</option>
                                    <option value="employed">Employed</option>
                                    <option value="unemployed">Unemployed</option>
                                    <option value="student">Student</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                        <h3 class="fw-bold">Address</h3>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                
                                <label for="hnum" class="form-label fw-medium">House/building No.</label>
                                <input type="number" class="form-control form-control-sm" name="house_no" required>
                                
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="street" class="form-label fw-medium">Street</label>
                                <input type="text" class="form-control form-control-sm" name="street" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="city" class="form-label fw-medium">City</label>
                                <input type="text" class="form-control form-control-sm" name="city" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="province" class="form-label fw-medium">Province</label>
                                <input type="text" class="form-control form-control-sm" name="province" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="country" class="form-label fw-medium">Country</label>
                                <input type="text" class="form-control form-control-sm" name="country" required>
                            </div>
                            <div class="col-md-2">
                                <label for="region" class="form-label fw-medium">Region</label>
                                <input type="text" class="form-control form-control-sm" name="region" required>
                            </div>
                            <div class="col-md-2">
                                <label for="zipcode" class="form-label fw-medium">Zip Code</label>
                                <input type="text" class="form-control form-control-sm" name="zip_code" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <h3 class="fw-bold">Employment Information</h3>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="ename" class="form-label fw-medium">Employer's Name</label>
                                <input type="text" class="form-control form-control-sm" name="employer_name" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="nb" class="form-label fw-medium">Nature of Business/Industry</label>
                                <input type="text" class="form-control form-control-sm" name="nature_of_business" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="jtitle" class="form-label fw-medium">Job Title/Position</label>
                                <input type="text" class="form-control form-control-sm" name="job_title" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="nb" class="form-label fw-medium">Length of Employment</label>
                                <input type="text" class="form-control form-control-sm" name="length_of_employment" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <h3 class="fw-bold">Financial Information</h3>
                        <div class="row">
                            <div class="col-md-2 mb-3">
                                <label for="mincome" class="form-label fw-medium">Monthly Income</label>
                                <input type="text" class="form-control form-control-sm" name="monthly_income" required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="loanAmount" class="form-label fw-medium">Loan Amount</label>
                                <input type="text" class="form-control form-control-sm" name="loan_amount" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="loanPurpose" class="form-label fw-medium">Loan Purpose</label>
                                <input type="text" class="form-control form-control-sm" name="loan_purpose" required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="loanTerm" class="form-label fw-medium">Loan Term <small>(in months)</small></label>
                                <input type="number" class="form-control form-control-sm" name="loan_term" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="paymentSource" class="form-label fw-medium">Source of Repayment</label>
                                <input type="text" class="form-control form-control-sm" name="repayment_source" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <h5 class="fw-semibold">Existing Debts or Loans <small>(if any):</small></h5>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="debtType" class="form-label fw-medium">Type of Debt/Loan</label>
                                <input type="text" class="form-control form-control-sm" name="debt_type">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="oBal" class="form-label fw-medium">Outstanding Balance</label>
                                <input type="text" class="form-control form-control-sm" name="outstanding_balance">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="monthlyInstallment" class="form-label fw-medium">Monthly Installment</label>
                                <input type="text" class="form-control form-control-sm" name="monthly_installment">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <h3 class="fw-bold">Bank Information</h3>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="bankName" class="form-label fw-medium">Bank Name</label>
                                <input type="text" class="form-control form-control-sm" name="bank_name" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="accType" class="form-label fw-medium">Account Type</label>
                                <input type="text" class="form-control form-control-sm" name="account_type" placeholder="e.g.,Savings, Checking" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="accNum" class="form-label fw-medium">Account Number</label>
                                <input type="text" class="form-control form-control-sm" name="account_number" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="bankRs" class="form-label fw-medium">Length of Bank Relationship <small>(in years)</small></label>
                                <input type="number" class="form-control form-control-sm" name="bank_relationship_length" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="averageBal" class="form-label fw-meidum">Average Monthly Balance</label>
                                <input type="text" class="form-control form-control-sm" name="average_monthly_balance" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <h3 class="fw-bold">Additional Information</h3>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="info1" class="form-label fw-medium">How did you here about our lending website?</label>
                                <select class="form-select form-select-sm" name="how_did_you_hear" required>
                                    <option value="">Select</option>
                                    <option value="Facebook Ads">Facebook Ads</option>
                                    <option value="Reffered by a friend">Reffered by a friend</option>
                                    <option value="Youtube Ads">Youtube Ads</option>
                                    <option value="Facebook Page">Facebook Page</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="info2" class="form-label fw-medium">Have you ever declared bankruptcy or defaulted on a loan? </label>
                                <select class="form-select form-select-sm" name="declared_bankruptcy" required>
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="info3" class="form-label fw-medium">Do you have any legal judgments against you? </label>
                                <select class="form-select form-select-sm" name="legal_judgments" required>
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="info4" class="form-label fw-medium">Do you have any pending legal cases?</label>
                                <select class="form-select form-select-sm" name="pending_legal_cases" required>
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="info5" class="form-label fw-medium">Are you currently involved in any debt consolidation or credit counseling program? </label>
                                <select class="form-select form-select-sm" name="debt_consolidation" required>
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="info6" class="form-label fw-medium">Are you a co-signer or guarantor for any other person's debt?</label>
                                <select class="form-select form-select-sm" name="cosigner_guarantor" required>
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="submit" name="submit" value="Submit">
            </form>
        <hr><hr>

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

