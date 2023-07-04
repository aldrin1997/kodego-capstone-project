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
<img src="image/logo.png" width="160px" class="navbar p-2">
		<a href="admin.php"><i class="fa fa-tachometer"></i> Dashboard</a>
		<a href="loanlist.php"><i class="fa fa-credit-card"></i> Loan List</a>
		<a href="#" class="active"><i class="fa-solid fa-coins"></i> Loan Plans</a>
		<a href="users.php"><i class="fa-solid fa-users"></i> Users</a>
    <a href="logout.php" class="logout-btn"><i class="fa-sharp fa-solid fa-power-off"></i> Logout</a>
  </div>
<div class="content">
    <div class="container-fluid">
	
        <div class="col-lg-12">
            <div class="row">
                <!-- FORM Panel -->
                <div class="col-md-4">
                <form action="" id="manage-plan">
                    <div class="card">
                        <div class="card-header">
                               Plan's Form
                          </div>
                        <div class="card-body">
                                <input type="hidden" name="id">
                                <div class="form-group">
                                    <label class="control-label">Plan (months)</label>
                                    <input type="number" name="months" id="" class="form-control text-right">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Interest</label>
                                    <div class="input-group">
                                      <input type="number" step="any" min="0" max="100" class="form-control text-right" name="interest_percentage" aria-label="Interest">
                                      <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                      </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Monthly Over due's Penalty</label>
                                    <div class="input-group">
                                      <input type="number" step="any" min="0" max="100" class="form-control text-right" aria-label="Penalty percentage" name="penalty_rate">
                                      <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                      </div>
                                    </div>
                                </div>
                                
                                
                                
                        </div>
                                
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
                                    <button class="btn btn-sm btn-default col-sm-3" type="button" onclick="_reset()"> Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                <!-- FORM Panel -->
    
                <!-- Table Panel -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Plan</th>
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