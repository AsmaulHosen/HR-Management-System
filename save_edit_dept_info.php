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
				window.location='http://localhost/project/dept_info.php';
			});
		}
	</script>

</header>
<?php
    include 'connection/connect.php';
    if(count($_POST)>0) {
        mysqli_query($conn,"UPDATE dept_info set dept_id='" . $_POST['dept_id'] . "', dept_name='" . $_POST['dept_name'] . "' WHERE dept_id='" . $_POST['dept_id'] . "'")or die(mysqli_error());
        echo "<script type= 'text/javascript'>MyModifyFn();
		</script>";
	}
?>
