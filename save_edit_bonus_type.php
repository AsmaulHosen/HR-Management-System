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
				window.location='http://localhost/project/bonus_type.php';
			});
		}
	</script>
	
</header>
<?php
    include 'connection/connect.php';
    if(count($_POST)>0) {
        mysqli_query($conn,"UPDATE bonus_type set bonus_type_id='" . $_POST['bonus_type_id'] . "', bonus_type='" . $_POST['bonus_type'] . "',bonus_per='" . $_POST['bonus_per'] . "',bonus_mnt='" . $_POST['bonus_mnt'] . "' WHERE bonus_type_id='" . $_POST['bonus_type_id'] . "'")or die(mysqli_error());
        echo "<script type= 'text/javascript'>MyModifyFn();
		</script>";
	}
?>
