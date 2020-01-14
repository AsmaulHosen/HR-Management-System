<?php
	
	include 'includes/header.php' ;
	include 'connection/connect.php';

	?>
	<header>
	<script>
		function MySucessFn(){
			swal({
				title: "Sucessfully Salary Generate!",
				text: "",
				type: "success",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/salary_generate.php';
			});
		}
		function WrongFn(){
			swal({
				title: "Sorry User! Salary Generate Unsuccessful!",
				text: "",
				type: "warning",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/salary_generate.php';
			});
		}

	</script>
	
</header>
	<?php
	if(isset($_SESSION['query'])){
		
		$q = $_SESSION['query'];
		$m = $_SESSION['month'];
		$y = $_SESSION['year'];
		
		$result2 = mysqli_query($conn,$q);
		
		while($row = mysqli_fetch_array($result2)) {
			$emp_name = $row["employee_name"];
			
			$basic_salry = $row["basic_salary"];
			$house_rent = $row["house_rent"];
			$medical = $row["medical"];
			$transport = $row["transport"];
			$vat = $row["vat"];
			$total_working_day = $row["total_working_day"];
			$no_of_present = $row["no_of_present"];
			$over_time = $row["over_time"];
			$late_time = $row["late_time"];												
			$total_over_time_salary = $row["total_over_time_salary"];
			$bonus = $row["Bonus"];
			
			$totalPayable = $row["total_payable_salary"] + $row["Bonus"];
			$total_payable_salary = round($totalPayable, 0, PHP_ROUND_HALF_UP);
			
			
			$checkEmployeeStatus = "SELECT * FROM employee_info WHERE employee_name = '$emp_name'";
			$rslt = mysqli_query($conn,$checkEmployeeStatus);
			while($r = mysqli_fetch_array($rslt)){
				if($r["employee_status"] == "Active"){
					$inserQuery = "INSERT INTO generate_salary
					(`employee_name`,`basic_salary`,`house_rent`,`medical`,`transport`,`vat`,`total_working_day`,`no_of_present`,`over_time`,`late_time`,`total_over_time_salary`,`total_payable_salary`,`Bonus`,`month`,`year`) VALUES
					('$emp_name','$basic_salry','$house_rent','$medical','$transport','$vat','$total_working_day','$no_of_present','$over_time','$late_time','$total_over_time_salary','$total_payable_salary','$bonus','$m','$y')";
					if(mysqli_query($conn,$inserQuery)){
						$a = 1;
					}
				}
			}		
		}
		if(isset($a) && $a == 1){
			echo "<script type= 'text/javascript'>MySucessFn();
            </script>";
		}
	}
	else{
		echo "<script type= 'text/javascript'>WrongFn();
            </script>";
	}
	
	
	
?>