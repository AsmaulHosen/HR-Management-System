<?php 
	
	$okFlag = TRUE;
	$message = '';
	
	if(!isset($_REQUEST['name']) || $_REQUEST['name'] == ''){
		$message .= 'Please type your name.<br>';
		$okFlag = FALSE;
	}
	if(!isset($_REQUEST['email']) || $_REQUEST['email'] == ''){
		$message .= 'Please type your email.<br>';
		$okFlag = FALSE;
	}
	if(!isset($_REQUEST['password']) || $_REQUEST['password'] == ''){
		$message .= 'Please type your password.<br>';
		$okFlag = FALSE;
	}
	
	if(isset($_REQUEST['password']) && isset($_REQUEST['confirm-password'])){
		if($_REQUEST['password'] != $_REQUEST['confirm-password']){
			$message .= 'Password didn\'t match.<br>';
			$okFlag = FALSE;
		}
	}
	
	if($okFlag){
		$name 		= $_REQUEST['name'];
		$email 		= $_REQUEST['email'];
		$password 	= md5($_REQUEST['password']);
		include_once 'dbcon.php';
		$conn = connect();
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = $conn->query($sql);
		if($result->num_rows <= 0){
			$sql = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";
			//echo $sql ; exit;
			if($conn->query($sql)){
				echo $_SESSION['msg'] = 'Successfully Registered';
				header('location:login.php');
			}else{
				$_SESSION['msg'] = 'Database Error';
				header('location:login.php');
			}
			}else{
			$_SESSION['msg'] = 'email already exist.<br>';
			header('location:login.php');
			}
	}else{
		$_SESSION['msg'] = $message;
		header('location:login.php?msg='.$message);
	}