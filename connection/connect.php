<?php
	//Connect to database    
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "hrm_project";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    if(!$conn){
		die('Could not Connect My Sql:' .mysql_error());
	}
?>