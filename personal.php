
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
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  active" href="loan_application.php">Apply for a Loan</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="profile.php">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="mb-3">
        
    </div>
    <div class="content container">
        <div class="row">
            <div class="text-center">
                <h1 class="fw-bold">Personal Loan Application Form</h1>
            </div>
            <hr>
            <form id="loanForm" action="submit.php" method="POST">
                <div class="col-md-12">
                    <h3 class="fw-bold">Personal Information</h3>
                    <div class="row g-3">
                        <div class="col-md-4 mb-3">
                            <label for="firstname" class="form-label fw-bold">First Name</label>
                            <input type="name" class="form-control form-control-sm" id="fname" aria-describedby="fname" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="middlename" class="form-label fw-bold">Middle Name</label>
                            <input type="middlename" class="form-control form-control-sm" name ="middlename" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="lastname" class="form-label fw-bold">Last Name</label>
                            <input type="lastname" class="form-control form-control-sm" id="lastname" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="birthdate" class="form-label fw-bold">Date of Birth</label>
                            <input type="date" class="form-control form-control-sm" id="DOB" required>
                        </div>
                        <div class="col-md-4 mb-3 fw-bold">
                            <label for="status">Status</label>
                                <select class="form-select form-select-sm" id="status" required>
                                <option value="">Select</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3 fw-bold">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select form-select-sm" id="gender" required>
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
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control form-control-sm" id="email" required>
                            </form>
                        </div>
                        <div class="col-md-4 mb-3">
                            <form>
                                <label for="phone" class="form-label fw-bold">Contact Number</label>
                                <input type="tel" id="phone" class="form-control form-control-sm" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <label for="employment" class="form-label">Employment Status</label>
                            <select class="form-select form-select-sm" id="employment" required>
                                <option value="">Select</option>
                                <option value="employed">Employed</option>
                                <option value="unemployed">Unemployed</option>
                                <option value="student">Student</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h3 class="fw-bold">Address</h3>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            
                            <label for="hnum" class="form-label fw-bold">House/building No.</label>
                            <input type="text" class="form-control form-control-sm" id="hnum" required>
                            
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="street" class="form-label fw-bold">Street</label>
                            <input type="text" class="form-control form-control-sm" id="street" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="city" class="form-label fw-bold">City</label>
                            <input type="text" class="form-control form-control-sm" id="city" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="province" class="form-label fw-bold">Province</label>
                            <input type="text" class="form-control form-control-sm" id="province" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="country" class="form-label fw-bold">Country</label>
                            <input type="text" class="form-control form-control-sm" id="country" required>
                        </div>
                        <div class="col-md-2">
                            <label for="region" class="form-label fw-bold">Region</label>
                            <input type="text" class="form-control form-control-sm" id="region" required>
                        </div>
                        <div class="col-md-2">
                            <label for="zipcode" class="form-label fw-bold">Zip Code</label>
                            <input type="text" class="form-control form-control-sm" id="zipcode" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h3 class="fw-bold">Employment Information</h3>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="ename" class="form-label fw-bold">Employer's Name</label>
                            <input type="name" class="form-control form-control-sm" id="ename" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="nb" class="form-label fw-bold">Nature of Business/Industry</label>
                            <input type="text" class="form-control form-control-sm" id="nb" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="jtitle" class="form-label fw-bold">Job Title/Position</label>
                            <input type="text" class="form-control form-control-sm" id="jtitle" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="nb" class="form-label fw-bold">Length of Employment</label>
                            <input type="text" class="form-control form-control-sm" id="empLength" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h3 class="fw-bold">Financial Information</h3>
                    <div class="row">
                        <div class="col-md-2 mb-3">
                            <label for="mincome" class="form-label fw-bold">Monthly Income</label>
                            <input type="text" class="form-control form-control-sm" id="mincome" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="loanAmount" class="form-label fw-bold">Loan Amount</label>
                            <input type="text" class="form-control form-control-sm" id="loanAmount" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="loanPurpose" class="form-label fw-bold">Loan Purpose</label>
                            <input type="name" class="form-control form-control-sm" id="loanPurpose" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="loanTerm" class="form-label fw-bold">Loan Term <small>(in months)</small></label>
                            <input type="number" class="form-control form-control-sm" id="loanTerm" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="paymentSource" class="form-label fw-bold">Source of Repayment</label>
                            <input type="text" class="form-control form-control-sm" id="paymentSource" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h5 class="fw-semibold">Existing Debts or Loans <small>(if any):</small></h5>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="debtType" class="form-label fw-bold">Type of Debt/Loan</label>
                            <input type="text" class="form-control form-control-sm" id="debtType">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="oBal" class="form-label fw-bold">Outstanding Balance</label>
                            <input type="text" class="form-control form-control-sm" id="oBal">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="monthlyInstallment" class="form-label fw-bold">Monthly Installment</label>
                            <input type="text" class="form-control form-control-sm" id="monthlyInstallment">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h3 class="fw-bold">Bank Information</h3>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="bankName" class="form-label fw-bold">Bank Name</label>
                            <input type="text" class="form-control form-control-sm" id="bankName" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="accType" class="form-label fw-bold">Account Type</label>
                            <input type="text" class="form-control form-control-sm" id="accType" placeholder="e.g.,Savings, Checking" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="accNum" class="form-label fw-bold">Account Number</label>
                            <input type="text" class="form-control form-control-sm" id="accNum" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="bankRs" class="form-label fw-bold">Length of Bank Relationship <small>(in years)</small></label>
                            <input type="number" class="form-control form-control-sm" id="bankRs" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="averageBal" class="form-label fw-bold">Average Monthly Balance</label>
                            <input type="text" class="form-control form-control-sm" id="averageBal" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h3 class="fw-bold">Additional Information</h3>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="info1" class="form-label fw-bold">How did you here about our lending website?</label>
                            <select class="form-select form-select-sm" id="info1" required>
                                <option value="">Select</option>
                                <option value="Facebook Ads">Facebook Ads</option>
                                <option value="Reffered by a friend">Reffered by a friend</option>
                                <option value="Youtube Ads">Youtube Ads</option>
                                <option value="Facebook Page">Facebook Page</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="info2" class="form-label fw-bold">Have you ever declared bankruptcy or defaulted on a loan? </label>
                            <select class="form-select form-select-sm" id="info2" required>
                                <option value="">Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="info3" class="form-label fw-bold">Do you have any legal judgments against you? </label>
                            <select class="form-select form-select-sm" id="info3" required>
                                <option value="">Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="info4" class="form-label fw-bold">Do you have any pending legal cases?</label>
                            <select class="form-select form-select-sm" id="info4" required>
                                <option value="">Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="info5" class="form-label fw-bold">Are you currently involved in any debt consolidation or credit counseling program? </label>
                            <select class="form-select form-select-sm" id="info5" required>
                                <option value="">Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="info6" class="form-label fw-bold">Are you a co-signer or guarantor for any other person's debt?</label>
                            <select class="form-select form-select-sm" id="info6" required>
                                <option value="">Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="form-check mb-5">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="declaration" required>
                    <label class="form-check-label" for="flexRadioDefault2">
                       <span class="fw-bold">Declaration:</span> I hereby declare that the information provided above is true, complete, 
                       and accurate to the best of my knowledge. I understand that any false or misleading information may result in the 
                       rejection of my loan application. I authorize the lending institution to verify the information provided and obtain 
                       credit reports, as deemed necessary, to evaluate my loan application.
                    </label>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
            </form>
        </div>
    </div>
    <br>
    <br>
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
            <a class="nav-link" href="index.php">Home</a>
          </div>
          <div class="footer-links">
            <a class="nav-link" href="about.php">About Us</a>
          </div>
          <div class="footer-links">
            <a class="nav-link" href="privacy.php">Privacy Policy</a>
          </div>
          <div class="footer-links">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </div>

        </div>
        <div class="footer-column">
          <div class="footer-links">
            <a class="nav-link" href="personal.php">Personal Loan</a>
          </div>
          <div class="footer-links">
            <a class="nav-link" href="salary.php">Salary Loan</a>
          </div>
          <div class="footer-links">
            <a class="nav-link" href="business.php">Small Business Loan</a>
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

</script>
</body>
</html>
