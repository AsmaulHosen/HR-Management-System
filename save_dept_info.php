
<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'connection/connect.php';
?>
<header>
	<script>
		function MySucessFn(){
			swal({
				title: "Department Add Sucessfully!",
				text: "",
				type: "success",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/dept_info.php';
			});
		}
		function MyCheckFn(){
			swal({
				title: "Sorry User! Department Name already exists..!",
				text: "",
				type: "warning",
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
    if(isset($_POST['save']))
    {
		// variables for input data
        $dept_id = uniqid('Dep');
        $dept_name = $_POST['dept_name'];


        $duplicate=mysqli_query($conn,"select * from dept_info where dept_name='$dept_name'");
        if (mysqli_num_rows($duplicate)>0)
        {
			echo "<script type= 'text/javascript'>MyCheckFn();
            </script>";
		}
        else
        {
			// sql query for inserting data into database
			mysqli_query($conn,"insert into dept_info values ('$dept_id','$dept_name')") or die(mysqli_error());
			echo "<script type= 'text/javascript'>MySucessFn();
            </script>";
		}
	}
?>
