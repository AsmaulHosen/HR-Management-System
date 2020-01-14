
<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'connection/connect.php';
?>
<header>
	<script>
		function MySucessFn(){
      console.log('hjhhg')
			swal({
				title: "Employee Type Add Sucessfully!",
				text: "",
				type: "success",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/employee_type.php';
			});
		}
		function MyCheckFn(){
			swal({
				title: "Sorry User! Employee Type already exists..!",
				text: "",
				type: "warning",
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
    if(isset($_POST['save']))
    {
		// variables for input data
        $employee_type_id = uniqid('EmpTy');
        $employee_type = $_POST['employee_type'];


        $duplicate=mysqli_query($conn,"select * from employee_type where employee_type='$employee_type'");
        if (mysqli_num_rows($duplicate)>0)
        {
			echo "<script type= 'text/javascript'>MyCheckFn();
            </script>";
		}
        else
        {
			// sql query for inserting data into database
			mysqli_query($conn,"insert into employee_type values ('$employee_type_id','$employee_type')") or die(mysqli_error());
			echo "<script type= 'text/javascript'>MySucessFn();
            </script>";
		}
	}
?>
