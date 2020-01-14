
<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'connection/connect.php';
?>
<header>
	<script>
		function MySucessFn(){
			swal({
				title: "Requisition Information Add Sucessfully!",
				text: "",
				type: "success",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/Outdoor_Emp_work.php';
			});
		}
		function MyCheckFn(){
			swal({
				title: "Sorry User! This Employee already exists..!",
				text: "",
				type: "warning",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/Outdoor_Emp_work.php';
			});
		}
	</script>

</header>

<?php

    if(isset($_POST['save']))
    {
      $requisition_id= uniqid('Req');
      $employee_name = $_POST['employee_name'];
      $requisition_title = $_POST['requisition_title'];
      $requisition_date= $_POST['requisition_date'];
      $requisition_time_from = $_POST['requisition_time_from'];
      $requisition_time_to= $_POST['requisition_time_to'];
      $requisition_enter = $_POST['requisition_enter'];
      $requisition_details = $_POST['requisition_details'];


        $duplicate=mysqli_query($conn,"select * from out_work_info where employee_name='$employee_name'");
        if (mysqli_num_rows($duplicate)>0)
        {
			echo "<script type= 'text/javascript'>MyCheckFn();
            </script>";
		}
        else
        {
			// sql query for inserting data into database
			mysqli_query($conn,"insert into out_work_info values ('$requisition_id','$employee_name','$requisition_title','$requisition_date','$requisition_time_from','$requisition_time_to','$requisition_enter','$requisition_details')") or die(mysqli_error());
			echo "<script type= 'text/javascript'>MySucessFn();
            </script>";
		}
	}
?>
