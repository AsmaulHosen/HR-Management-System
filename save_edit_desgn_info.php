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
				window.location='http://localhost/project/desgn_info.php';
			});
		}
	</script>

</header>
<?php
    include 'connection/connect.php';
    if(count($_POST)>0) {
        mysqli_query($conn,"UPDATE desgn_info set desgn_id='" . $_POST['desgn_id'] . "', desgn_name='" . $_POST['desgn_name'] . "' WHERE desgn_id='" . $_POST['desgn_id'] . "'")or die(mysqli_error());
        echo "<script type= 'text/javascript'>MyModifyFn();
		</script>";
	}
?>
