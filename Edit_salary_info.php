<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	
	
	
    $result = mysqli_query($conn,"SELECT * FROM salary_info WHERE salary_id='" . $_GET['salary_id'] . "'");
    $row= mysqli_fetch_array($result);
?>
<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Edit Salary Information</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">
								<?php
									$id=$_GET['salary_id'];
									$result = mysqli_query($conn,"SELECT * FROM salary_info WHERE salary_id='$id'");
									$row = mysqli_fetch_array($result);
									$basic = $row['Basic_Salary'];
									$house = $row['House_rent'];
									$medical = $row['Medical'];
									$transport = $row['Transport'];
									$vat = $row['vat'];
									$total = $row['total_salary'];
									
									
									
									
									$HR_per=($house/($basic / 100));
									
									
									
								?>
                                <form action="save_edit_salary_info.php" method="post" onsubmit="return CheckValue();" novalidate="novalidate" id="salary_info_form">
                                    <input type="hidden" name="salary_id"  value="<?php echo $row['salary_id']; ?>">
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label for="employee_name" class=" form-control-label">Employee Name</label>
												<input type="text" name="employee_name" oninput="CheckValue()" id="employee_name" value="<?php echo $row['employee_name']; ?>"class="form-control" disabled >
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label for="Basic_Salary" class=" form-control-label">Basic Salary</label>
												<input type="text" name="Basic_Salary"  id="Basic_Salary" value="<?php echo $row['Basic_Salary']; ?>" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											<div class="form-group">
												<label for="House_rent" class=" form-control-label">House Rent Allowance </label>
												<select name="House_rent" id="House_rent" class="form-control">
													<option selected=""><?php echo $HR_per; ?>  %</option>
													<option value="1">1  %</option>
													<option value="2">2  %</option>
													<option value="3">3  %</option>
													<option value="4">4  %</option>
													<option value="5">5  %</option>
													<option value="6">6  %</option>
													<option value="7">7  %</option>
													<option value="8">8  %</option>
													<option value="9">9  %</option>
													<option value="10">10  %</option>
													<option value="11">11  %</option>
													<option value="12">12  %</option>
													<option value="13">13  %</option>
													<option value="14">14  %</option>
													<option value="15">15  %</option>
													<option value="16">16  %</option>
													<option value="17">17  %</option>
													<option value="18">18  %</option>
													<option value="19">19  %</option>
													<option value="20">20  %</option>
													<option value="21">21  %</option>
													<option value="22">22  %</option>
													<option value="23">23  %</option>
													<option value="24">24  %</option>
													<option value="25">25  %</option>
													
												</select>
											</div>
										</div>
										<div class="col-3">
											<div class="form-group">
												<label for="Medical" class=" form-control-label">Medical Allowance</label>
												<select name="Medical" id="Medical" class="form-control">
													<option value="0">Select Allowance</option>
													<option value="1">1  %</option>
													<option value="2">2  %</option>
													<option value="3">3  %</option>
													<option value="4">4  %</option>
													<option value="5">5  %</option>
													<option value="6">6  %</option>
													<option value="7">7  %</option>
													<option value="8">8  %</option>
													<option value="9">9  %</option>
													<option value="10">10  %</option>
													<option value="11">11  %</option>
													<option value="12">12  %</option>
													<option value="13">13  %</option>
													<option value="14">14  %</option>
													<option value="15">15  %</option>
													<option value="16">16  %</option>
													<option value="17">17  %</option>
													<option value="18">18  %</option>
													<option value="19">19  %</option>
													<option value="20">20  %</option>
													<option value="21">21  %</option>
													<option value="22">22  %</option>
													<option value="23">23  %</option>
													<option value="24">24  %</option>
													<option value="25">25  %</option>
													
												</select>
											</div>
										</div>
										<div class="col-3">
											<div class="form-group">
												<label for="Transport" class=" form-control-label">Transport Allowance</label>
												<select name="Transport" id="Transport" class="form-control">
													<option value="0">Select Allowance</option>
													<option value="1">1  %</option>
													<option value="2">2  %</option>
													<option value="3">3  %</option>
													<option value="4">4  %</option>
													<option value="5">5  %</option>
													<option value="6">6  %</option>
													<option value="7">7  %</option>
													<option value="8">8  %</option>
													<option value="9">9  %</option>
													<option value="10">10  %</option>
													<option value="11">11  %</option>
													<option value="12">12  %</option>
													<option value="13">13  %</option>
													<option value="14">14  %</option>
													<option value="15">15  %</option>
													<option value="16">16  %</option>
													<option value="17">17  %</option>
													<option value="18">18  %</option>
													<option value="19">19  %</option>
													<option value="20">20  %</option>
													<option value="21">21  %</option>
													<option value="22">22  %</option>
													<option value="23">23  %</option>
													<option value="24">24  %</option>
													<option value="25">25  %</option>
													
												</select>
											</div>
										</div>
										<div class="col-3">
											<div class="form-group">
												<label for="vat" class=" form-control-label">VAT</label>
												<select name="vat" id="vat" class="form-control">
													<option value="0">Select Vat</option>
													<option value="1">1  %</option>
													<option value="2">2  %</option>
													<option value="3">3  %</option>
													<option value="4">4  %</option>
													<option value="5">5  %</option>
													<option value="6">6  %</option>
													<option value="7">7  %</option>
													<option value="8">8  %</option>
													<option value="9">9  %</option>
													<option value="10">10  %</option>
													<option value="11">11  %</option>
													<option value="12">12  %</option>
													<option value="13">13  %</option>
													<option value="14">14  %</option>
													<option value="15">15  %</option>
													<option value="16">16  %</option>
													<option value="17">17  %</option>
													<option value="18">18  %</option>
													<option value="19">19  %</option>
													<option value="20">20  %</option>
													<option value="21">21  %</option>
													<option value="22">22  %</option>
													<option value="23">23  %</option>
													<option value="24">24  %</option>
													<option value="25">25  %</option>
													
												</select>
											</div>
										</div>
										
									</div>
									
									<div>
										
										<button id="button" type="submit" class="btn btn-sm btn-info btn-block" name="save" value="submit"><i class="fa fa-edit"></i>&nbsp; Edit Employee Salary</button>
										
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

</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include "includes/footer.php";?>
