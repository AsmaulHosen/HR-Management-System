<?php
//database

function connect($setup = FALSE){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "project";
	
	if($setup)
		$con = new mysqli($servername, $username, $password);
	else
		$con = new mysqli($servername, $username, $password, $database);

	
	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	} 
	return $con;

}