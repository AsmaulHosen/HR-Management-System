<?php 
//check login
	session_start();
	$okFlag = TRUE;
	$message = '';
	
	
	if(!isset($_SESSION['login_counter'])) $_SESSION['login_counter'] = 0;
	
	
	if(!isset($_REQUEST['email']) || $_REQUEST['email'] == ''){
		$message .= 'Please type your email.<br>';
		$okFlag = FALSE;
	}
	if(!isset($_REQUEST['password']) || $_REQUEST['password'] == ''){
		$message .= 'Please type your password.<br>';
		$okFlag = FALSE;
	}
	//echo 1234;exit;
	if($okFlag){
		$email 		= $_REQUEST['email'];
		$password 	= md5($_REQUEST['password']);
		
		
		
		$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		//echo $sql;exit;
		include_once 'dbcon.php';
		$conn = connect();
		
		$result = $conn->query($sql);
		
		if($result->num_rows > 0){
			$_SESSION['isLoggedIn'] = TRUE;
			
			foreach($result as $row){
				$_SESSION['username'] = $row['name'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['user_role'] = $row['user_role'];
			}
			header('location:index.php');
		}else{
			$sql = "SELECT * FROM users WHERE email='$email'";
			$result = $conn->query($sql);
			if($result->num_rows <= 0){
				$message .='Please Register<br>';
			}else{
				$_SESSION['input_email'] = $email;
				$message .='Password didn\'t match<br>';
			}
			
			$_SESSION['msg'] = $message;
			$_SESSION['login_counter']++;
			header('location:login.php');
		}
	}else{
		$_SESSION['msg'] = $message;
		header('location:login.php');
	}