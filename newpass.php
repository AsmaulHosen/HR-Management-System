<?php session_start();?>
<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Sufee Admin - HTML5 Admin Template</title>
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
		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
		
		<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
		
	</head>
	
<?php
	include 'connection/connect.php';
	if(isset($_POST['submit'])){
	
	$newpass=$_POST['pass'];
	$email=$_SESSION['Email'];
	$sql="Update user set `Password`='$newpass' where `Email`='$email' ";
	//echo $sql;exit;
	$conn->query($sql);
		header('location:dashboard.php');

	}
?>
	<body class="bg-dark">
		
		
		<div class="sufee-login d-flex align-content-center flex-wrap">
			<div class="container">
				<div class="login-content">
					
					<div class="login-form">
						<h2><center>Company User</center></h2>
					
						<hr/>
						<form action="" method="post" onsubmit="return CheckValue();" novalidate="novalidate" id="employee_type_form">
							
							<div class="form-group">
								<label>New Password</label>
								<input type="pass" name="pass" class="form-control" placeholder="New Password">
							</div>
							<button type="submit" name="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>
							<hr/>
							<a href="index.php" type="button" class="btn btn-info btn-flat m-b-15">Back</a>
							
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
		<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/plugins.js"></script>
		<script src="assets/js/main.js"></script>
		
		
	</body>
</html>
