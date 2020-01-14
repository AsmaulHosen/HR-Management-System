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
				window.location='http://localhost/project/acess_control.php';
			});
		}
		function MyMFn(){
			swal({
				title: "Invalid password!!",
				text: "Operation has been stopped!!",
				type: "error",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/acess_control.php';
			});
		}
	</script>
	
</header>
<?php
    include 'connection/connect.php';
	if (isset($_POST['submit'])){
		$mail = $_SESSION['Email'];
		$pass= $_POST['pass'];
		$sql = "SELECT Email,Password from user Where Email = '$mail' And Password='$pass'";
		$result = $conn->query($sql);
       if($result->num_rows > 0){
			if(count($_POST)>0) {
			mysqli_query($conn,"UPDATE user set Acess='" . $_POST['Acess'] . "' WHERE User_ID='" . $_POST['User_ID'] . "'")or die(mysqli_error());
			echo "<script type= 'text/javascript'>MyModifyFn();
			</script>";
			}
		} else {
			echo "<script type= 'text/javascript'>MyMFn();</script>";
		}
	}
?>
