<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'connection/connect.php';
	?>
<header>
	<script>
		function MyModifyFn(){
			swal({
				title: "Record Modified Successfully",
				text: "",
				type: "success",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/view_Employee.php';
			});
		}
	</script>
	
</header>
<?php
	include 'connection/connect.php';
    if(count($_POST)>0) {
        mysqli_query($conn,"UPDATE employee_info set employee_status='" . $_POST['employee_status'] . "' WHERE employee_email='" . $_POST['employee_email'] . "'")or die(mysqli_error());
        echo "<script type= 'text/javascript'>MyModifyFn();
		</script>";
	}
?>
