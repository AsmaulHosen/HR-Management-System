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
				window.location='http://localhost/project/fixed_attendance.php';
			});
		}
	</script>
	
</header>
<?php
    include 'connection/connect.php';
    $employee_id=$_POST['employee_id'];
    $on_duty=$_POST['on_duty'];
    $off_duty=$_POST['off_duty'];
    $a_date=$_POST['a_date'];
	
    if(count($_POST)>0) {
        mysqli_query($conn,"UPDATE attendance_info set on_duty='$on_duty', off_duty='$off_duty' WHERE employee_id='$employee_id' and a_date='$a_date'")or die(mysqli_error());
        echo "<script type= 'text/javascript'>MyModifyFn();
		</script>";
	}
?>
