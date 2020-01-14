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
				window.location='http://localhost/project/employee_type.php';
			});
		}
	</script>
	
</header>
<?php
    include 'connection/connect.php';
    if(count($_POST)>0) {
        mysqli_query($conn,"UPDATE employee_type set employee_type_id='" . $_POST['employee_type_id'] . "', employee_type='" . $_POST['employee_type'] . "' WHERE employee_type_id='" . $_POST['employee_type_id'] . "'")or die(mysqli_error());
        echo "<script type= 'text/javascript'>MyModifyFn();
		</script>";
	}
?>