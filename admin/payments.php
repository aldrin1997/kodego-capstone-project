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
	<div class="sidebar">
		<img src="images/MAC LENDING.png" width="160px" class="navbar p-2">
		<a href="admin.php"><i class="fa fa-tachometer"></i> Dashboard</a>
		<a href="loanlist.php"><i class="fa fa-credit-card"></i> Loan List</a>
		<a href="#" class="active"><i class="fa fa-money-check"></i> Payments</a>
		<a href="loanplans.php"><i class="fa-solid fa-coins"></i> Loan Plans</a>
		<a href="loantypes.php"><i class="fa fa-chart-line"></i> Loan types</a>
        <a href="borrowers.php"><i class="fa-solid fa-hand-holding-dollar"></i> Borrowers</a>
		<a href="users.php"><i class="fa-solid fa-users"></i> Users</a>
	</div>
</nav>
<div class="content">
    <div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<large class="card-title">
					<b>Payment List</b>
					
				</large>
				
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="loan-list">
					<colgroup>
						<col width="10%">
						<col width="25%">
						<col width="25%">
						<col width="20%">
						<col width="10%">
						<col width="10%">
					</colgroup>
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center">Loan Reference No</th>
							<th class="text-center">Payee</th>
							<th class="text-center">Amount</th>
							<th class="text-center">Penalty</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
crossorigin="anonymous"></script>
</body>	

</html>