<?php
    include 'connection/connect.php';
	session_start();
	include 'signin_checker.php' ;
	//if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']==TRUE && $_SESSION['Acess']==6) {
	//if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']==TRUE) {
	
?>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Sufee Admin - HTML5 Admin Template">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="apple-touch-icon" href="apple-icon.png">
		<link rel="shortcut icon" href="favicon.ico">
		
		<link rel="stylesheet" href="assets/css/normalize.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/themify-icons.css">
		<link rel="stylesheet" href="assets/css/flag-icon.min.css">
		<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
		<!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
		<link rel="stylesheet" href="assets/scss/style.css">
		<link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
		
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	</head>
	<body>
		<?php
			include 'includes/left_panel.php';
			include 'includes/navbar.php' ;
			include 'connection/connect.php';
		?>
		
		<div class="content mt-3">
			<div class="animated fadeIn">
				<div class="col-sm-12 mb-4">
					<div class="card-group">
						<div class=" col-lg-3 col-md-6">
							<div class="card-body bg-flat-color-1">
								<div class="h1 text-muted text-right mb-4">
									<i class="fa fa-users text-light"></i>
								</div>							
								<div class="h4 mb-0 text-light">
									<?php
										$query= mysqli_query($conn,"SELECT count(*) as total_emp from employee_info");
										while ($row=mysqli_fetch_assoc($query)){
										?>
										<span class="count"><?php echo $row['total_emp'] ?></span>
									<?php } ?>
								</div>
								<small class="text-uppercase font-weight-bold text-light">Total Employee</small>
								
							</div>
						</div>				
						<div class=" col-lg-3 col-md-6">
							<div class="card-body bg-flat-color-2">
								<div class="h1 text-light text-right mb-4">
									<i class="fa fa-building-o"></i>
								</div>
								<div class="h4 mb-0 text-light">
									<?php
										$query= mysqli_query($conn,"SELECT count(*) as total_dept from dept_info");
										while ($row=mysqli_fetch_assoc($query)){
										?>
										<span class="count"><?php echo $row['total_dept'] ?></span>
									<?php } ?>
								</div>
								<small class="text-light text-uppercase font-weight-bold">Total Department</small>
								
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="card-body bg-flat-color-3">
								<div class="h1 text-right mb-4">
									<i class="fa fas fa-address-card text-light"></i>
									
								</div>
								<div class="h4 mb-0 text-light">
									<?php
										$query= mysqli_query($conn,"SELECT count(*) as total_desg from desgn_info");
										while ($row=mysqli_fetch_assoc($query)){
										?>
										<span class="count"><?php echo $row['total_desg'] ?></span>
									<?php } ?>
								</div>
								<small class="text-light text-uppercase font-weight-bold">Total Designation</small>
								
							</div>
						</div>
						
						<div class="col-lg-3 col-md-6 ">
							<div class="card-body bg-flat-color-5">
								<div class="h1 text-light text-right mb-4">
									<i class="fa fas fa-tags text-light"></i>
								</div>
								<div class="h4 mb-0 text-light">
									<?php
										$query= mysqli_query($conn,"SELECT count(*) as total_emp_type from employee_type");
										while ($row=mysqli_fetch_assoc($query)){
										?>
										<span class="count"><?php echo $row['total_emp_type'] ?></span>
									<?php } ?>
								</div>
								<small class="text-light text-uppercase font-weight-bold">Total Employee Type</small>
								
							</div>
						</div>
					</div>
					
				</div>
			</div><!-- .animated -->
		</div><!-- .content -->
		
		
		<div class="content mt-3">
			<div class="animated fadeIn">
				<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==5)){ ?>
					<div class="col-lg-3 col-md-6">
						<div class="card">
							<a href="view_Employee.php">
								<div class="card-body">
									<div class="stat-widget-one">
										
										<div class="stat-icon dib"><i class="ti-eye text-success border-success"></i></div>
										<div class="stat-content dib">
											<div class="stat"> View Employee</div>
										</div>
										
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php } ?> 
				<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==5)){ ?>
					<div class="col-lg-3 col-md-6">
						<div class="card">
							<a href="Employee.php">
								<div class="card-body">
									<div class="stat-widget-one">
										
										<div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
										<div class="stat-content dib">
											<div class="stat">Employee</div>
										</div>
										
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php } ?> 	
				<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==5)){ ?>
					<div class="col-lg-3 col-md-6">
						<div class="card">
							<a href="desgn_info.php">
								<div class="card-body">
									<div class="stat-widget-one">
										
										<div class="stat-icon dib"><i class="ti-id-badge text-success border-success"></i></div>
										<div class="stat-content dib">
											<div class="stat">Designation</div>
										</div>
										
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php } ?> 		
				<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==5)){ ?>
					<div class="col-lg-3 col-md-6">
						<div class="card">
							<a href="dept_info.php">
								<div class="card-body">
									<div class="stat-widget-one">
										
										<div class="stat-icon dib"><i class="ti-home text-success border-success"></i></div>
										<div class="stat-content dib">
											<div class="stat">Department</div>
										</div>
										
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php } ?> 
				<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)){ ?>
					<div class="col-lg-3 col-md-6">
						<div class="card">
							<a href="report_attendance.php">
								<div class="card-body">
									<div class="stat-widget-one">
										
										<div class="stat-icon dib"><i class="ti-timer text-success border-success"></i></div>
										<div class="stat-content dib">
											<div class="stat"> Attendance</div>
										</div>
										
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php } ?> 	
				<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)){ ?>
					<div class="col-lg-3 col-md-6">
						<div class="card">
							<a href="attendance_summery.php">
								<div class="card-body">
									<div class="stat-widget-one">
										
										<div class="stat-icon dib"><i class="ti-time text-success border-success"></i></div>
										<div class="stat-content dib">
											<div class="stat"> Summery</div>
										</div>
										
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php } ?> 
				<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==6)){ ?>
					<div class="col-lg-3 col-md-6">
						<div class="card">
							<a href="charts.php">
								<div class="card-body">
									<div class="stat-widget-one">
										
										<div class="stat-icon dib"><i class="ti-pie-chart text-success border-success"></i></div>
										<div class="stat-content dib">
											<div class="stat">Charts</div>
										</div>
										
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php } ?> 
				<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==6)){ ?>	
					<div class="col-lg-3 col-md-6">
						<div class="card">
							<a href="salary_charts.php">
								<div class="card-body">
									<div class="stat-widget-one">
										
										<div class="stat-icon dib"><i class="ti-bar-chart text-success border-success"></i></div>
										<div class="stat-content dib">
											<div class="stat">Salary Chart</div>
										</div>
										
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php } ?> 
			</div><!-- .animated -->
		</div><!-- .content -->
		<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)){ ?>	
			<div class="content mt-3">
				<div class="animated fadeIn">
					<div class="col-sm-12 mb-4">
						<div class="card-group">
							<div class=" col-lg-3 col-md-6">
								<div class="card-body bg-flat-color-1">				
									<h4 class="mb-3 text-light">Male & Female Employee</h4>
									<div class="h4 mb-0 text-light">
										<table  class="table table-striped table-bordered text-center text-light" >
											<thead>
												<tr>
													<th>Gender</th>
													<th>Total</th>
												</tr>
											</thead>
											<?php
												$result = mysqli_query($conn,"select employee_gender,count(*) as number from employee_info group by employee_gender");
												$counter = 0;
												while($row = mysqli_fetch_array($result)) {
												?>
												<tbody id="myTable">
													<tr>
														
														<td><?php echo $row["employee_gender"]; ?></td>
														<td><?php echo $row["number"]; ?></td>
														
													</tr>
													<?php
													}
												?>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>				
							<div class="col-lg-3 col-md-6">
								<div class="card-body bg-flat-color-2">						
									<h4 class="mb-3 text-light">Employee Type</h4>
									<div class="h4 mb-0">
										<table  class="table table-striped table-bordered text-center text-light" >
											<thead>
												<tr>
													<th>Type</th>
													<th>Total</th>
												</tr>
											</thead>
											<?php
												$result = mysqli_query($conn,"select employee_type,count(*) as number from employee_info group by employee_type");
												$counter = 0;
												while($row = mysqli_fetch_array($result)) {
												?>
												<tbody id="myTable">
													<tr>
														
														<td><?php echo $row["employee_type"]; ?></td>
														<td><?php echo $row["number"]; ?></td>
														
													</tr>
													<?php
													}
												?>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card-body bg-flat-color-3" style="heigh:150px">				
									<h4 class="mb-3 text-light">Departments & Emplyees</h4>
									<div class="h4 mb-0 text-light">
										<table  class="table table-striped table-bordered text-center text-light" >
											<thead>
												<tr>
													<th>Department</th>
													<th>Total</th>
												</tr>
											</thead>
											<?php
												$result = mysqli_query($conn,"select employee_dept,count(*) as number from employee_info group by employee_dept");
												$counter = 0;
												while($row = mysqli_fetch_array($result)) {
												?>
												<tbody id="myTable">
													<tr>
														
														<td><?php echo $row["employee_dept"]; ?></td>
														<td><?php echo $row["number"]; ?></td>
														
													</tr>
													<?php
													}
												?>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6">
								<div class="card-body bg-flat-color-5">			
									<h4 class="mb-3 text-light">Designations & Employees</h4>
									<div class="h4 mb-0 text-light">
										<table  class="table table-striped table-bordered text-center text-light" >
											<thead>
												<tr>
													<th>Designation</th>
													<th>Total</th>
												</tr>
											</thead>
											<?php
												$result = mysqli_query($conn,"select employee_desgn,count(*) as number from employee_info group by employee_desgn");
												$counter = 0;
												while($row = mysqli_fetch_array($result)) {
												?>
												<tbody id="myTable">
													<tr>
														
														<td><?php echo $row["employee_desgn"]; ?></td>
														<td><?php echo $row["number"]; ?></td>
														
													</tr>
													<?php
													}
												?>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
				</div><!-- .animated -->
			</div><!-- .content -->
		<?php } ?> 
	</div><!-- /#right-panel -->
	
	<!-- Right Panel -->
	<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
	
    <!--  Chart js -->
    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/widgets.js"></script>
	
</body>
</html>

<?php
	/* }
		else{
		header('location:logout.php');
	} */
?>											
