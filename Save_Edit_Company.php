<?php 
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'connection/connect.php';
?>
<header>
	<script>
		function MyModifyFn(){
			swal({
				title: "Company Information Modified Successfully",
				text: "",
				type: "success", 
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/Company_Info.php';
			});
		}
	</script>
	
</header>
<?php
    if(count($_POST)>0) {
        mysqli_query($conn,"UPDATE company_info set company_id='" . $_POST['company_id'] . "', company_name='" . $_POST['company_name'] . "',company_address='" . $_POST['company_address'] . "',company_details='" . $_POST['company_details'] . "',company_city='" . $_POST['company_city'] . "',company_street='" . $_POST['company_street'] . "',company_zip='" . $_POST['company_zip'] . "',company_number='" . $_POST['company_number'] . "',company_2number='" . $_POST['company_2number'] . "',company_email='" . $_POST['company_email'] . "' ,company_fax='" . $_POST['company_fax'] . "' WHERE company_id ='" . $_POST['company_id'] . "'")or die(mysqli_error());
        echo "<script type= 'text/javascript'>MyModifyFn();
		</script>";
	}
?>