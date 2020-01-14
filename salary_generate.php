<?php
    include 'includes/header.php' ;
	
?>
<header>
	<script>
		
		function CheckFn(){
			swal({
				title: "Sorry User! Already salaries have been generated in this month",
				text: "",
				type: "warning",
				timer: 4000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/salary_generate.php';
			});
		}
	</script>
	
</header>
<?php 
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==2)){
		
	?>
	
	<div class="content mt-3 container">
		<div class="animated fadeIn">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<strong class="card-title">Salary Generate</strong>
						</div>
						<div class="card-body">
							<!-- Credit Card -->
							<div id="pay-invoice">
								<div class="card-body">
									<form method="post" action="">	
										<div class="row">
											<div class="col-2">
												<label for="month" class=" form-control-label">Pick a Month </label>
											</div>
											<div class="col-2">
												<select name="month" id="month" class="form-control">
													<option value="0">Select Month</option>
													<option value="January">January</option>
													<option value="February">February</option>
													<option value="March">March</option>
													<option value="April">April</option>
													<option value="May">May</option>
													<option value="June">June</option>
													<option value="July">July</option>
													<option value="August">August</option>
													<option value="September">September</option>
													<option value="October">October</option>
													<option value="November">November</option>
													<option value="December">December</option>
													
												</select>
											</div>
											<div class="col-2">
												<label for="year" class=" form-control-label">Pick a Year </label>
											</div>
											<div class="col-2">
												<select name="year" id="year" class="form-control">
													<option value="0">Select Year</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>
													<option value="2019">2019</option>
													<option value="2020">2020</option>
													<option value="2021">2021</option>
													<option value="2022">2022</option>
													<option value="2023">2023</option>
													<option value="2024">2024</option>
													<option value="2025">2025</option>
													<option value="2026">2026</option>
													<option value="2027">2027</option>
													<option value="2028">2028</option>
													<option value="2029">2029</option>
													<option value="2030">2030</option>
													<option value="2031">2031</option>
													<option value="2032">2032</option>
													<option value="2033">2033</option>
													<option value="2034">2034</option>
													<option value="2035">2035</option>
													<option value="2036">2036</option>
													<option value="2037">2037</option>
													
												</select>
											</div>
											<div class="col-4">
												<button id="button" type="submit" class="btn btn-md btn-primary btn-block" name="submit" value="submit"><i class="fa fa-dollar"></i>&nbsp; Salary Genarate</button>
											</div>
										</div>
										
									</form>
								</div>
							</div>
							
						</div>
					</div> <!-- .card -->
					
				</div><!--/.col-->
			</div>
		</div><!-- .animated -->
	</div><!-- .content -->
	
	<div class="content mt-3">
		<div class="animated fadeIn">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							
							<div class="row">
								<div class="col-md-7">
									<strong class="card-title">All Salary Information</strong>
								</div>
								<div class="col-md-5">
									<input class="form-control" id="myInput" type="text" placeholder="Search..">
								</div>
							</div>
						</div>
						<div class="card-body">							
							<table  class="table table-sm text-centered table-bordered table-responsive">
								<thead>
									<tr>
										<th>Name</th>											
										<th>Month</th>
										<th>Working Days</th>
										<th>No. of Present</th>
										<th>Year</th>
										<th>Basic Salary</th>
										<th>House Rent</th>
										<th>Medical</th>
										<th>Trasport</th>
										<th>Vat</th>										
										<th>OT (hh:mm)</th>
										<th>LT (hh:mm)</th>										
										<th>OT Salary</th>
										<th>Bonus</th>
										<th>Payable Salary</th>
										
									</tr>
								</thead>
								<tbody id="myTable">
									<?php
										if(isset($_POST['submit'])){
											$month = $_POST['month'];
											$year = $_POST['year'];
											
											if($month == "0" || $year == "0"){
												//no select message
												}else{
												
												if($month == "January"){
													
													$monthRangeFrom = $year."-01-01";
													$monthRangeTo = $year."-01-31";
												}
												else if($month == "February"){
													$monthRangeFrom = $year."-02-01";
													$monthRangeTo = $year."-02-29";
												}
												else if($month == "March"){
													$monthRangeFrom = $year."-03-01";
													$monthRangeTo = $year."-03-31";
												}
												else if($month == "April"){
													$monthRangeFrom = $year."-04-01";
													$monthRangeTo = $year."-04-30";
												}
												else if($month == "May"){
													$monthRangeFrom = $year."-05-01";
													$monthRangeTo = $year."-05-31";
												}
												else if($month == "June"){
													$monthRangeFrom = $year."-06-01";
													$monthRangeTo = $year."-06-30";
												}
												else if($month == "July"){
													$monthRangeFrom = $year."-07-01";
													$monthRangeTo = $year."-07-31";
												}
												else if($month == "August"){
													$monthRangeFrom = $year."-08-01";
													$monthRangeTo = $year."-08-31";
												}
												else if($month == "September"){
													$monthRangeFrom = $year."-09-01";
													$monthRangeTo = $year."-09-30";
												}
												else if($month == "October"){
													$monthRangeFrom = $year."-10-01";
													$monthRangeTo = $year."-10-31";
												}
												else if($month == "November"){
													$monthRangeFrom = $year."-11-01";
													$monthRangeTo = $year."-11-30";
												}
												else if($month == "December"){
													$monthRangeFrom = $year."-12-01";
													$monthRangeTo = $year."-12-31";
												}
												
												$checkQuery = "SELECT * FROM generate_salary WHERE month = '$month' AND year = '$year'";
												$rs = mysqli_query($conn,$checkQuery);
												if($rs->num_rows > 0){
													//echo "already genarate";
													echo "<script type= 'text/javascript'>CheckFn();
													</script>";
													
													}else{
													
													$query = "Select e.employee_name, e.employee_type, s.basic_salary, s.house_rent, s.medical, s.transport, s.vat, noa.total_working_day, nop.no_of_present, ot.over_time, lt.late_time, (ot.over_time - lt.late_time) AS total_over_time, ((((s.basic_salary/noa.total_working_day)/9)/60) * (ot.over_time - lt.late_time)) as total_over_time_salary, (((((s.basic_salary/noa.total_working_day)/9)/60) * (ot.over_time - lt.late_time)) + s.total_salary) AS total_payable_salary,SUM(DISTINCT(bonus_type.bonus_per)*s.Basic_Salary/100) AS 'Bonus'
													FROM employee_info as e, salary_info as s, attendance_info as a, bonus_type,
													(SELECT attendance_info.employee_name, COUNT(weekend) as total_working_day FROM attendance_info WHERE attendance_info.a_date BETWEEN '".$monthRangeFrom."' and '".$monthRangeTo."' AND attendance_info.weekend != 'WeekEnd' GROUP BY attendance_info.employee_name) AS noa,
													(SELECT attendance_info.employee_name, COUNT(on_duty) as no_of_present FROM attendance_info WHERE attendance_info.a_date BETWEEN '".$monthRangeFrom."' and '".$monthRangeTo."' AND attendance_info.on_duty != '' GROUP BY attendance_info.employee_name) as nop,
													(SELECT attendance_info.employee_name, SUM(ot_time) as over_time FROM attendance_info WHERE attendance_info.a_date BETWEEN '".$monthRangeFrom."' and '".$monthRangeTo."' GROUP BY attendance_info.employee_name) AS ot,
													(SELECT attendance_info.employee_name, SUM(late) as late_time FROM attendance_info WHERE attendance_info.a_date BETWEEN '".$monthRangeFrom."' and '".$monthRangeTo."' GROUP BY attendance_info.employee_name) AS lt
													where e.employee_name = s.employee_name
													And e.employee_name = a.employee_name
													AND e.employee_name = noa.employee_name
													AND e.employee_name = nop.employee_name AND e.employee_name = ot.employee_name AND e.employee_name = lt.employee_name
													AND bonus_type.bonus_mnt='".$month."'
													GROUP BY e.employee_name";
													
													$result = mysqli_query($conn,$query);
													$_SESSION['q_result'] = $result;
													$_SESSION['query'] = $query;
													
													$_SESSION['month'] = $month;
													$_SESSION['year'] = $year;
													while($row = mysqli_fetch_array($result)) {
														$totalPayable = $row["total_payable_salary"] + $row["Bonus"];
														$name = $row["employee_name"];
														$checkEmployeeStatus = "SELECT * FROM employee_info WHERE employee_name = '$name'";
														$rslt = mysqli_query($conn,$checkEmployeeStatus);
														while($r = mysqli_fetch_array($rslt)){
															if($r["employee_status"] == "Active"){
																
																
																
															?>												
															<tr>
																<td><?php echo $row["employee_name"]; ?></td>															
																<td><?php echo $month; ?></td>
																<td><?php echo $row["total_working_day"]; ?> Days </td>
																<td><?php echo $row["no_of_present"]; ?> Days </td>
																<td><?php echo $year; ?></td>
																<td><?php echo $row["basic_salary"]; ?>/-</td>
																<td><?php echo $row["house_rent"]; ?>/-</td>
																<td><?php echo $row["medical"]; ?>/-</td>
																<td><?php echo $row["transport"]; ?>/-</td>
																<td><?php echo $row["vat"]; ?>/-</td>
																
																<td><?php echo date('H:i',mktime(0,$row["over_time"]));?></td>
																<td><?php echo date('H:i',mktime(0,$row["late_time"])); ?></td>												
																<td><?php echo round($row["total_over_time_salary"], 0, PHP_ROUND_HALF_UP); ?>/-</td>
																<td><?php echo round($row["Bonus"], 0, PHP_ROUND_HALF_UP); ?>/-</td>								
																<td><b><?php echo round($totalPayable, 0, PHP_ROUND_HALF_UP); ?>/-</b></td>
																
															</tr>
															
															<?php
															}
														}	
													}
													
												}
												
												//echo $_SESSION['query'];
											} 
										} ?>
								</tbody>
								
							</table>
							<div class="row">								
								<div class="col-md-10">
								</div>
								<div class="col-md-2">
									<form method="post" action="save_salary.php">															
										<button id="confirm" type="submit" class="btn btn-sm btn-success btn-block" name="confirm" value="Confirm"><i class="fa fa-money"></i>&nbsp; Save </button>					
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div><!-- .animated -->
	</div><!-- .content -->
	
</div><!-- /#right-panel -->

<!-- Right Panel -->


<?php include "includes/footer.php";}?>
