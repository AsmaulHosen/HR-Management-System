<?php
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Helper\Sample;
	
	//require __DIR__ . '/../Header.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/Project/phpSpreadsheet/src/Bootstrap.php';
	
	session_start();
	
	$helper = new Sample();
	$inputFileType = "Xlsx";
	$fn = $_GET['n'];
	$inputFileName = __DIR__ . '/sampleData/'. $fn;
	$reader = IOFactory::createReader($inputFileType);
	$reader->setReadDataOnly(true);
	$spreadsheet = $reader->load($inputFileName);
	//$helper->log('Loading file ' . pathinfo($inputFileName, PATHINFO_BASENAME) . ' using IOFactory to identify the format');
	//$spreadsheet = IOFactory::load($inputFileName);
	$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
	
	//Create Connection
	$servername='localhost';
	$username='root';
	$password='';
	$dbname = "hrm_project";
	$conn=mysqli_connect($servername,$username,$password,"$dbname");
	if(!$conn){
		die('Could not Connect My Sql:' .mysql_error());
	}
	
	$ok = false;
	echo $ok;
	for($row=2; $row<=count($sheetData); $row++){
		$xx ="'" . implode("','", $sheetData[$row]) ."'";
		$sql = "INSERT INTO attendance_info(employee_id,ac_no,no,employee_name,auto_assign,a_date,timetable,on_duty,".
        "off_duty,clock_in,clock_out,normal,real_time,late,early,absent,ot_time,work_time,exception,must_c_in,".
        "must_c_out,department,ndays,weekend,holiday,att_time,n_days_ot,weekend_ot,holiday_ot)VALUES(". $xx . ");";
		
        //echo $sql; exit;
		if($conn->query($sql)){
			$ok = true;
			//echo '<script>window.location.href = "../../../attendance.php";</script>';
		}
		else{
			$ok = false;
			
		}
	}
	if($ok){
		
		echo '<script>window.location.href = "../../../attendance.php";</script>';
	}
	else {
		echo "Insert Error";
	}
	//var_dump($sheetData);
