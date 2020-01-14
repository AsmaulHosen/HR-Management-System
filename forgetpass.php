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

	if (isset($_POST['submit'])){
	$sql = "select Email from user where Email='" . $_POST["email"] . "'";
	$result = $conn->query($sql);
		if($result->num_rows > 0){
		$mailto = mysqli_real_escape_string($conn,$_POST['email']);
		function generateRandomString()  {
				$characters = '01234567899876543210';
				$length = 6;
				$charactersLength = strlen($characters);
				$randomString = '';
				for ($i = 0; $i < $length; $i++) {
					$randomString .= $characters[rand(0, $charactersLength - 1)];
				}
				return $randomString;
		}
		$OTP 	= generateRandomString();
		$pass	= $OTP;
		$sql 	= "Update user set OTP='$pass' WHERE Email='$mailto'";
		$conn->query($sql);
		$mailSub 	= "Password Reset Code";
		$message	=" 
		<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
			<meta name='viewport' content='width=device-width, initial-scale=1.0' />
			<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
			<title>Set up a new password for [Product Name]</title>
			<!-- 
			The style block is collapsed on page load to save you some scrolling.
			Postmark automatically inlines all CSS properties for maximum email client 
			compatibility. You can just update styles here, and Postmark does the rest.
			-->
			<style type='text/css' rel='stylesheet' media='all'>
			/* Base ------------------------------ */
			
			*:not(br):not(tr):not(html) {
			font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
			box-sizing: border-box;
			}
			
			body {
			width: 100% !important;
			height: 100%;
			margin: 0;
			line-height: 1.4;
			background-color: #F2F4F6;
			color: #74787E;
			-webkit-text-size-adjust: none;
			}
			
			p,
			ul,
			ol,
			blockquote {
			line-height: 1.4;
			text-align: left;
			}
			
			a {
			color: #3869D4;
			}
			
			a img {
			border: none;
			}
			
			td {
			word-break: break-word;
			}
			/* Layout ------------------------------ */
			
			.email-wrapper {
			width: 100%;
			margin: 0;
			padding: 0;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			background-color: #F2F4F6;
			}
			
			.email-content {
			width: 100%;
			margin: 0;
			padding: 0;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			}
			/* Masthead ----------------------- */
			
			.email-masthead {
			padding: 25px 0;
			text-align: center;
			}
			
			.email-masthead_logo {
			width: 94px;
			}
			
			.email-masthead_name {
			font-size: 16px;
			font-weight: bold;
			color: #bbbfc3;
			text-decoration: none;
			text-shadow: 0 1px 0 white;
			}
			/* Body ------------------------------ */
			
			.email-body {
			width: 100%;
			margin: 0;
			padding: 0;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			border-top: 1px solid #EDEFF2;
			border-bottom: 1px solid #EDEFF2;
			background-color: #FFFFFF;
			}
			
			.email-body_inner {
			width: 570px;
			margin: 0 auto;
			padding: 0;
			-premailer-width: 570px;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			background-color: #FFFFFF;
			}
			
			.email-footer {
			width: 570px;
			margin: 0 auto;
			padding: 0;
			-premailer-width: 570px;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			text-align: center;
			}
			
			.email-footer p {
			color: #AEAEAE;
			}
			
			.body-action {
			width: 100%;
			margin: 30px auto;
			padding: 0;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			text-align: center;
			}
			
			.body-sub {
			margin-top: 25px;
			padding-top: 25px;
			border-top: 1px solid #EDEFF2;
			}
			
			.content-cell {
			padding: 35px;
			}
			
			.preheader {
			display: none !important;
			visibility: hidden;
			mso-hide: all;
			font-size: 1px;
			line-height: 1px;
			max-height: 0;
			max-width: 0;
			opacity: 0;
			overflow: hidden;
			}
			/* Attribute list ------------------------------ */
			
			.attributes {
			margin: 0 0 21px;
			}
			
			.attributes_content {
			background-color: #EDEFF2;
			padding: 16px;
			}
			
			.attributes_item {
			padding: 0;
			}
			/* Related Items ------------------------------ */
			
			.related {
			width: 100%;
			margin: 0;
			padding: 25px 0 0 0;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			}
			
			.related_item {
			padding: 10px 0;
			color: #74787E;
			font-size: 15px;
			line-height: 18px;
			}
			
			.related_item-title {
			display: block;
			margin: .5em 0 0;
			}
			
			.related_item-thumb {
			display: block;
			padding-bottom: 10px;
			}
			
			.related_heading {
			border-top: 1px solid #EDEFF2;
			text-align: center;
			padding: 25px 0 10px;
			}
			/* Discount Code ------------------------------ */
			
			.discount {
			width: 100%;
			margin: 0;
			padding: 24px;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			background-color: #EDEFF2;
			border: 2px dashed #9BA2AB;
			}
			
			.discount_heading {
			text-align: center;
			}
			
			.discount_body {
			text-align: center;
			font-size: 15px;
			}
			/* Social Icons ------------------------------ */
			
			.social {
			width: auto;
			}
			
			.social td {
			padding: 0;
			width: auto;
			}
			
			.social_icon {
			height: 20px;
			margin: 0 8px 10px 8px;
			padding: 0;
			}
			/* Data table ------------------------------ */
			
			.purchase {
			width: 100%;
			margin: 0;
			padding: 35px 0;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			}
			
			.purchase_content {
			width: 100%;
			margin: 0;
			padding: 25px 0 0 0;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			}
			
			.purchase_item {
			padding: 10px 0;
			color: #74787E;
			font-size: 15px;
			line-height: 18px;
			}
			
			.purchase_heading {
			padding-bottom: 8px;
			border-bottom: 1px solid #EDEFF2;
			}
			
			.purchase_heading p {
			margin: 0;
			color: #9BA2AB;
			font-size: 12px;
			}
			
			.purchase_footer {
			padding-top: 15px;
			border-top: 1px solid #EDEFF2;
			}
			
			.purchase_total {
			margin: 0;
			text-align: right;
			font-weight: bold;
			color: #2F3133;
			}
			
			.purchase_total--label {
			padding: 0 15px 0 0;
			}
			/* Utilities ------------------------------ */
			
			.align-right {
			text-align: right;
			}
			
			.align-left {
			text-align: left;
			}
			
			.align-center {
			text-align: center;
			}
			/*Media Queries ------------------------------ */
			
			@media only screen and (max-width: 600px) {
			.email-body_inner,
			.email-footer {
				width: 100% !important;
			}
			}
			
			@media only screen and (max-width: 500px) {
			.button {
				width: 100% !important;
			}
			}
			/* Buttons ------------------------------ */
			
			.button {
			background-color: #3869D4;
			border-top: 10px solid #3869D4;
			border-right: 18px solid #3869D4;
			border-bottom: 10px solid #3869D4;
			border-left: 18px solid #3869D4;
			display: inline-block;
			color: #FFF;
			text-decoration: none;
			border-radius: 3px;
			box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);
			-webkit-text-size-adjust: none;
			}
			
			.button--green {
			background-color: #22BC66;
			border-top: 10px solid #22BC66;
			border-right: 18px solid #22BC66;
			border-bottom: 10px solid #22BC66;
			border-left: 18px solid #22BC66;
			}
			
			.button--red {
			background-color: #FF6136;
			border-top: 10px solid #FF6136;
			border-right: 18px solid #FF6136;
			border-bottom: 10px solid #FF6136;
			border-left: 18px solid #FF6136;
			}
			/* Type ------------------------------ */
			
			h1 {
			margin-top: 0;
			color: #2F3133;
			font-size: 19px;
			font-weight: bold;
			text-align: left;
			}
			
			h2 {
			margin-top: 0;
			color: #2F3133;
			font-size: 16px;
			font-weight: bold;
			text-align: left;
			}
			
			h3 {
			margin-top: 0;
			color: #2F3133;
			font-size: 14px;
			font-weight: bold;
			text-align: left;
			}
			
			p {
			margin-top: 0;
			color: #74787E;
			font-size: 16px;
			line-height: 1.5em;
			text-align: left;
			}
			
			p.sub {
			font-size: 12px;
			}
			
			p.center {
			text-align: center;
			}
			</style>
		</head>
		<body>
			<span class='preheader'>Use this code to reset your password. </span>
			<table class='email-wrapper' width='100%' cellpadding='0' cellspacing='0'>
			<tr>
				<td align='center'>
				<table class='email-content' width='100%' cellpadding='0' cellspacing='0'>
					<tr>
					<td class='email-masthead'>
						<a class='email-masthead_name'>
				WELCOME 
			</a>
					</td>
					</tr>
					<!-- Email Body -->
					<tr>
					<td class='email-body' width='100%' cellpadding='0' cellspacing='0'>
						<table class='email-body_inner' align='center' width='570' cellpadding='0' cellspacing='0'>
						<!-- Body content -->
						<tr>
							<td class='content-cell'>
							<h1>Hi ,</h1>
							<p>You recently requested to reset your password for your account. Use the OTP(One time password) below to reset it. </p>
							<!-- Action -->
							<table class='body-action' align='center' width='100%' cellpadding='0' cellspacing='0'>
								<tr>
								<td align='center'>
									<!-- Border based button
									<table width='100%' border='0' cellspacing='0' cellpadding='0'>
									<tr>
										<td align='center'>
										<table border='0' cellspacing='0' cellpadding='0'>
											<tr>
											<label style='font-size:50px;' ><b>$OTP</b></label>
											</tr>
										</table>
										</td>
									</tr>
									</table>
								</td>
								</tr>
							</table>
							<p>For security, this request was received from your account. If you did not request a password reset, please ignore this email or contact support(tanveershuvos@gmail.com)</a> </p>
							<p>Thanks,
								<br>The DreamIT BD Team</p>
								<br>tanveershuvos@gmail.com</p>
						
							</td>
						</tr>
						</table>
					</td>
					</tr>
					<tr>
					<td>
						<table class='email-footer' align='center' width='570' cellpadding='0' cellspacing='0'>
						<tr>
							<td class='content-cell' align='center'>
							<p class='sub align-center'>&copy; 2018 BFMS. All rights reserved.</p>
							<p class='sub align-center'>
								[Brick Factory Management System, Singair]
							
							</p>
							</td>
						</tr>
						</table>
							</td>
						</tr>
					</table>
					</td>
				</tr>
				</table>
			</body>
		</html>";
		$mailMsg 	= $message;
		$sql 		= "Update user set Password='' WHERE Email='$mailto'";
		$conn->query($sql);
		require 'PHPMailer-master/PHPMailerAutoload.php';
		$mail 		= new PHPMailer();
		$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' 		=> false,
			'verify_peer_name' 	=> false,
			'allow_self_signed' => true
		)
		);
		$mail ->IsSmtp();
		$mail ->SMTPDebug = 0;
		$mail ->SMTPAuth = true;
		$mail ->SMTPSecure = 'ssl';
		$mail ->Host = "smtp.gmail.com";
		// $mail ->Port = 465; // or 587
		$mail ->Port = 465; // or 587
		$mail ->IsHTML(true);
		$mail ->Username = "bfmstanveer@gmail.com";
		$mail ->Password = "10126168";
		$mail->setFrom('OnTrac BD', 'OnTrac BD');
		$mail ->Subject = $mailSub;
		$mail ->Body = $mailMsg;
		$mail ->AddAddress($mailto);		
			if(!$mail->Send())
			{
				$_SESSION['mssg'] = "SOmething went wrong!! Please try again after sometimes!!";
			}
			else
			{
				$_SESSION['mssg'] = "One TIme Password Has been Sent to Your Email!! Please sign in with this password!!";
			}
		} 
		else
		{
		$_SESSION['mssg'] = "Email doesn't exist!!";
		}
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
								<label>Email address</label>
								<input type="email" name="email" class="form-control" placeholder="Email">
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
