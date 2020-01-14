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
				window.location='http://localhost/project/holiday_info.php';
			});
		}
	</script>
	
</header>
<?php
	include 'connection/connect.php';
    if(count($_POST)>0) {
        mysqli_query($conn,"UPDATE holiday_info set holiday_info_id='" . $_POST['holiday_info_id'] . "', holiday_title='" . $_POST['holiday_title'] . "', datefrom='" . $_POST['datefrom'] . "', dateto='" . $_POST['dateto'] . "' WHERE holiday_info_id='" . $_POST['holiday_info_id'] . "'")or die(mysqli_error());
        echo "<script type= 'text/javascript'>MyModifyFn();
		</script>";
	}
?>
