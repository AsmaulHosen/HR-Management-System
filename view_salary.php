<?php
    include 'includes/header.php' ;
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
							<strong class="card-title">All Salary Information</strong>
						</div>
						<div class="card-body">
							<!-- Credit Card -->
							<div id="pay-invoice">
								<div class="card-body">
									<form method="post" action="">	
										<div class="row">
											<div class="col-2">
												<label for="month" class=" form-control-label">Select Month </label>
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
												<label for="year" class=" form-control-label">Select Year </label>
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
												<button id="button" type="submit" class="btn btn-sm btn-primary btn-block" name="submit" value="submit"><i class="fa fa-search"></i>&nbsp; Search Information</button>
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
								
							</div>
							
							
						</div>
						<div class="card-body">
							<table id="exportTable" class="table table-striped table-bordered" text-align="center">
								<thead>
									<tr>
										<th>No</th>											
										<th>Name</th>											
										<th>Month</th>									
										<th>Year</th>
										<th>Basic Salary</th>
										<th>House Rent</th>
										<th>Medical</th>
										<th>Trasport</th>
										<th>Vat</th>																												
										<th>OT Salary</th>
										<th>Bonus</th>
										<th>Payable Salary</th>
									</tr>
								</thead>
								<?php
									if (isset($_POST['submit'])){
										$month=$_POST['month'];
										$year=$_POST['year'];
										
										$result = mysqli_query($conn,"SELECT * FROM `generate_salary` WHERE year='$year' AND month='$month'");
										//echo "all";exit;
										$counter = 0;
										while($row = mysqli_fetch_array($result)) {
											
										?>
										
										<tbody id="myTable">
											<tr>
												<td><?php echo ++$counter ;?></td>
												<td><?php echo $row["employee_name"]; ?></td>
												<td><?php echo $row["month"]; ?></td>
												<td><?php echo $row["year"]; ?></td>
												<td><?php echo $row["basic_salary"]; ?></td>
												<td><?php echo $row["house_rent"]; ?></td>
												<td><?php echo $row["medical"]; ?></td>
												<td><?php echo $row["transport"]; ?></td>
												<td><?php echo $row["vat"]; ?></td>
												<td><?php echo $row["total_over_time_salary"]; ?></td>
												<td><?php echo $row["Bonus"]; ?></td>
												<td><?php echo $row["total_payable_salary"]; ?></td>
												
											</tr>
											<tbody>
												<?php
												}
												
											}
										?>
										
									</table>
								</div>
								
							</div>
						</div>
						
						
					</div>
				</div><!-- .animated -->
			</div>
			
		</div><!-- /#right-panel -->
	
	<!-- Right Panel -->
	
	
<?php include "includes/footer.php";}?>
