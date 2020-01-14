<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
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
		<link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
		<script>
			function myFN(){
				swal({
			title: "Invalid Login Authentication",
			text: "Check your email or password again!!",
			type: "error",
			confirmButtonClass: "btn-danger",
			confirmButtonText: "OK!"
		});
			}
			
		</script>
	</head>
	<body class="bg-dark">
	<?php
		session_start();
		include 'connection/connect.php';
		$result = mysqli_query($conn,"SELECT * FROM `company_info` where company_id=1");
		$row = mysqli_fetch_array($result);
		
		//check login
		if (isset($_SESSION['login_counter']) && $_SESSION['login_counter'] >= 3) {
			$lockTime = $_SESSION['lockTime'];
			$currentTime = date("y-m-d h:i:sa");
			$to_time = strtotime("$lockTime");
			
			$from_time = strtotime("$currentTime");
			$interval = round(abs($to_time - $from_time) / 60,2);
			if ($interval >= 2) {
				unset($_SESSION['login_counter']);
			}
		}
		//check login-content 
		If(isset($_POST['submit'])){
			$mail 		= $_POST['Email'];
			$password 	= $_POST['Password'];
			$sql = "SELECT * FROM `user` WHERE `Email`='$mail' AND `Password`='$password'";
			$result = $conn->query($sql);
				if($result->num_rows > 0){
					$_SESSION['isLoggedIn'] = TRUE;
					foreach($result as $row){
					$_SESSION['Acess']=$row['Acess'];
					$_SESSION['Email']=$row['Email'];
					$_SESSION['Name']=$row['Name'];
					$_SESSION['Type']=$row['Type'];
					header('location:dashboard.php');
			         }	
				}
				else{
				$ssql = "SELECT * FROM `user` WHERE `Email`='$mail' AND `OTP`='$password'";
				$results = $conn->query($ssql);
					if($results->num_rows > 0){	
					$_SESSION['isLoggedIn'] = TRUE;
					foreach($results as $row){
					
						$_SESSION['Acess']=$row['Acess'];
						$_SESSION['Email']=$row['Email'];
						$_SESSION['Name']=$row['Name'];	
						$_SESSION['Type']=$row['Type'];
						header('location:newpass.php');
						}
					} 
				}	
				echo "<script>myFN();</script>";
				
		}
		?>
		

	
		
		
		<div class="sufee-login d-flex align-content-center flex-wrap">
			<div class="container">
				<div class="login-content">
					<div class="login-form">
						<h2><center><?php echo $row['company_name']; ?> Company User</center></h2>
						<hr/>
						<?php if (isset($_SESSION['login_counter']) && $_SESSION['login_counter'] >= 3) { ?>
							<div class="login-logo">
								<div class="form-group">
									<label>Temporarily Locked Your Login for 2 Minutes, Please Try Again 2 Minutes Later.</label>
								</div>
								
							</div>
							<?php }
							else
							{
							?>
							<form  method="POST">
								<div class="form-group">
									<label>Email address</label>
									<input type="email" class="form-control" name="Email" id="Email" placeholder="Email">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="Password" id="Password" placeholder="Password">
								</div>
								<div class="checkbox">
									
									<label class="pull-right">
										<a href="forgetpass.php">Forgotten Password?</a>
									</label>
								</div>
								<button name="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="login" id="login" onclick="return CheckValue2()" />Login</button>
							</form>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<script>
			function CheckValue2(){
				var email = document.getElementById('Email').value;
				var password = document.getElementById('Password').value;
				
				if(email==""){
					swal('Please Input Your Email Address !', '', 'warning')
					return false;
				}
				if(password==""){
					swal('Please Input Your Password !', '', 'warning')
					return false;
				}
				
			}
		</script>
		<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/plugins.js"></script>
		<script src="assets/js/main.js"></script>
		
		
	</body>
</html>
