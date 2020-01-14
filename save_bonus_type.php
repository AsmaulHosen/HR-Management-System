
<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'connection/connect.php';
?>
<header>
	<script>
		function MySucessFn(){
			swal({
				title: "Bonus Type Add Sucessfully!",
				text: "",
				type: "success",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/bonus_type.php';
			});
		}
		function MyCheckFn(){
			swal({
				title: "Sorry User! Bonus Type already exists..!",
				text: "",
				type: "warning",
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
    if(isset($_POST['save']))
    {
		// variables for input data
        $bonus_type_id = uniqid('EmpTy');
        $bonus_type = $_POST['bonus_type'];
        $bonus_per = $_POST['bonus_per'];
        $bonus_mnt = $_POST['bonus_mnt'];
		
		
        $duplicate=mysqli_query($conn,"select * from bonus_type where bonus_type='$bonus_type'");
        if (mysqli_num_rows($duplicate)>0)
        {
			echo "<script type= 'text/javascript'>MyCheckFn();
            </script>";
		}
        else
        {
			// sql query for inserting data into database
			mysqli_query($conn,"insert into bonus_type values ('$bonus_type_id','$bonus_type','$bonus_per','$bonus_mnt')") or die(mysqli_error());
			echo "<script type= 'text/javascript'>MySucessFn();
            </script>";
		}
	}
?>
