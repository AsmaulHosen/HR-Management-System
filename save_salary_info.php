
<?php 
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'connection/connect.php';
	
?>
<header>
	<script>
		function MySucessFn(){
			swal({
				title: "Salary Information Add Sucessfully!",
				text: "",
				type: "success", 
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/salary_info.php';
			});
		}
		function MyCheckFn(){
			swal({
				title: "Sorry User! This Employee Salary already exists..!",
				text: "",
				type: "warning", 
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/salary_info.php';
			});
		}
	</script>
	
</header>

<?php
    if(isset($_POST['save']))
    {
		// variables for input data
        $salary_id = uniqid('Sal');
        $employee_name = $_POST['employee_name'];
        $Basic_Salary = $_POST['Basic_Salary'];
        $House_rent = $_POST['House_rent'];
        $Medical = $_POST['Medical'];
        $Transport = $_POST['Transport'];
        $vat = $_POST['vat'];
        $house_rent_cal=($Basic_Salary / 100) * $House_rent;
        $medical_cal=($Basic_Salary / 100) * $Medical;
        $transport_cal=($Basic_Salary / 100) * $Transport;
        $total=($Basic_Salary + $house_rent_cal + $medical_cal+ $transport_cal);
        $vat_cal=($total / 100) * $vat;
        $total_salary=($total- $vat_cal);
        
        $duplicate=mysqli_query($conn,"select * from salary_info where employee_name='$employee_name'");
        if (mysqli_num_rows($duplicate)>0)
        {
			echo "<script type= 'text/javascript'>MyCheckFn();
            </script>";
		}
        else
        {
			// sql query for inserting data into database
			mysqli_query($conn,"insert into salary_info values ('$salary_id','$employee_name','$Basic_Salary','$house_rent_cal','$medical_cal','$transport_cal','$vat_cal','$total_salary')") or die(mysqli_error());
			echo "<script type= 'text/javascript'>MySucessFn();
            </script>";
		}
	}
?>