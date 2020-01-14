<?php 
	if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']==TRUE) {
	}
	else{
	header('location:logout.php');
    }
?>