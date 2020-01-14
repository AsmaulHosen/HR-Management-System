
<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'connection/connect.php';
?>
<header>
	<script>
		function MySucessFn(){
			swal({
				title: "Designation Add Sucessfully!",
				text: "",
				type: "success",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/desgn_info.php';
			});
		}
		function MyCheckFn(){
			swal({
				title: "Sorry User! Designation Name already exists..!",
				text: "",
				type: "warning",
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
    if(isset($_POST['save']))
    {
		// variables for input data
        $desgn_id = uniqid('Des');
        $desgn_name = $_POST['desgn_name'];


        $duplicate=mysqli_query($conn,"select * from desgn_info where desgn_name='$desgn_name'");
        if (mysqli_num_rows($duplicate)>0)
        {
			echo "<script type= 'text/javascript'>MyCheckFn();
            </script>";
		}
        else
        {
			// sql query for inserting data into database
			mysqli_query($conn,"insert into desgn_info values ('$desgn_id','$desgn_name')") or die(mysqli_error());
			echo "<script type= 'text/javascript'>MySucessFn();
            </script>";
		}
	}
?>
