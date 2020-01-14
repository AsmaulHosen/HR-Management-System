<?php
    $emp_name = $_POST['employee_name'];
    $emp_type=$_POST['employee_type'];
    $emp_dept=$_POST['employee_dept'];
    $emp_desgn=$_POST['employee_desgn'];
    $emp_pay=$_POST['employee_pay'];
    $mailto = $_POST['employee_email'];



    //$mailto = "armanshatu67@gmail.com";
    $mailSub = "Access Informtion";
    $message=
    '<body style="width:100% !important; margin:0 !important; padding:0 !important; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; background-color:#FFFFFF;">
	<table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" style="height:auto !important; margin:0; padding:0; width:100% !important; background-color:#FFFFFF; color:#222222;">
	<tr>
	<td>
	<div id="tablewrap" style="width:100% !important; max-width:600px !important; text-align:center !important; margin-top:0 !important; margin-right: auto !important; margin-bottom:0 !important; margin-left: auto !important;">
	<table id="contenttable" width="600" align="center" cellpadding="0" cellspacing="0" border="0" style="background-color:#FFFFFF; text-align:center !important; margin-top:0 !important; margin-right: auto !important; margin-bottom:0 !important; margin-left: auto !important; border:none; width: 100% !important; max-width:600px !important;">
	<tr>
	<td width="100%">
	<table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
	<td width="100%" bgcolor="#ffffff" style="text-align:center;">
	</td>
	</tr>
	</table>
	<table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="25" width="100%">
	<tr>
	<td width="100%" bgcolor="#ffffff" style="text-align:left;">
	<p style="color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:19px; margin-top:0; margin-bottom:20px; padding:0; font-weight:normal;">
	Dear '.$emp_name.' ,
	</p>
	<p style="color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:19px; margin-top:0; margin-bottom:20px; padding:0; font-weight:normal;">
	Welcome to this Company
	</p>
	<p style="color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:19px; margin-top:0; margin-bottom:20px; padding:0; font-weight:normal;">
	<hr/>Name : '.$emp_name.'
	<br>Type : '.$emp_type.'
  <br>Department : '.$emp_dept.'
  <br>Designation  : '.$emp_desgn.'
  <br>Payment Method : '.$emp_pay.'
	<br>Email Address : '.$mailto.'
	<br>Default Password : <strong>'.$Password.'</strong>

	<hr/>Your Default Password is  : <strong>'.$Password.'</strong>. Please Change it as soon as possible for ur Security Purpose.
	</p>
	</td>
	</tr>
	</table>
	<table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
	<td width="100%" bgcolor="#ffffff" style="text-align:center;"><a style="font-weight:bold; text-decoration:none;" href="http://localhost/project/index.php"><div style="display:block; max-width:100% !important; width:93% !important; height:auto !important;background-color:#2489B3;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px;border-radius:8px;color:#ffffff;font-size:24px;font-family:Arial, Helvetica, sans-serif;">Click This</div></a></td>
	</tr>
	</table>

	</td>
	</tr>
	</table>
	</div>
	</td>
	</tr>
	</table>
	</body>';
    $mailMsg = $message;


	require 'PHPMailer-master/PHPMailerAutoload.php';

	$mail = new PHPMailer();

	$mail->SMTPOptions = array(
    'ssl' => array(
	'verify_peer' => false,
	'verify_peer_name' => false,
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
	$mail ->Username = "shadiyaislam927@gmail.com";
	$mail ->Password = "Nmahi444";
	$mail->setFrom('shadiyaislam927@gmail.com', 'Company');

	$mail ->Subject = $mailSub;
	$mail ->Body = $mailMsg;
	$mail ->AddAddress($mailto);

	if(!$mail->Send())
	{
		//echo "Mail Sent";
	}
	else
	{
		//echo "Mail not Sent";
		// header('location:forgot_password.php?sent=1');
	}
