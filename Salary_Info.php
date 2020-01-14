<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==5)||($_SESSION['Acess']==2)){
?>
<div class="content mt-3">
	<div class="animated fadeIn">
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Salary Information</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">
								
                                <form action="save_salary_info.php" method="post" novalidate="novalidate" id="salary_info_form">
									
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label for="employee_name" class=" form-control-label">Employee Name</label>
												<select name="employee_name" id="employee_name" class="form-control">
                                                    <option value="0">Please select</option>
                                                    <?php
                                                        $query= mysqli_query($conn,"select * from employee_info");
                                                        while ($row=mysqli_fetch_assoc($query)){
                                                            $employee_name=$row['employee_name'];
														?>
														<option  value="<?php echo $row['employee_name'];?>"><?php echo $row['employee_name'];?></option>
													<?php } ?>
                                                    
												</select>
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label for="Basic_Salary" class=" form-control-label">Basic Salary</label>
												<input type="text" name="Basic_Salary" oninput="CheckValue()"  id="Basic_Salary" placeholder="Enter Basic Salary" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											<div class="form-group">
												<label for="House_rent" class=" form-control-label">House Rent Allowance </label>
												<select name="House_rent" id="House_rent" class="form-control">
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
												<select name="vat" id="Vat" class="form-control">
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
										
										<button id="button" type="submit" class="btn btn-sm btn-success btn-block" name="save" value="submit" onclick="return CheckValue2()"><i class="fa fa-plus"></i>&nbsp; Add Employee Salary</button>
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

<script>
	function CheckValue(){
		var bsalary = document.getElementById('Basic_Salary').value;
		
		if(isNaN(bsalary)){
			swal('Please enter only Number', '', 'warning');
			document.getElementById('Basic_Salary').value='';
			return false;
		}
	}
	
	function CheckValue2(){
		var name = document.getElementById('employee_name').value;
		var bsalary = document.getElementById('Basic_Salary').value;
		var house = document.getElementById('House_rent').value;
		var medical = document.getElementById('Medical').value;
		var transport = document.getElementById('Transport').value;
		var vat = document.getElementById('Vat').value;
		
		if(name=="0"){
			swal('Please Input Name !', '', 'warning')
			return false;
		}
		if(bsalary==""){
			swal('Please Input Basic Salary !', '', 'warning')
			return false;
		}
		if(house=="0"){
			swal('Please select House Rent Allowance', '', 'warning')
			return false;
		}
		if(medical=="0"){
			swal('Please select Medical Allowance', '', 'warning')
			return false;
		}
		if(transport=="0"){
			swal('Please select Transport Allowance', '', 'warning')
			return false;
		}
		if(vat=="0"){
			swal('Please select vat', '', 'warning')
			return false;
		}
	}
</script>

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						
						<div class="row">
							<div class="col-md-7">
								<strong class="card-title">Salary Information of All Employee</strong>
							</div>
							<div class="col-md-5">
								<input class="form-control" id="myInput" type="text" placeholder="Search..">
							</div>
						</div>
					</div>
					<div class="card-body">
						<table id="bootstrap-data-table" class="table table-striped table-bordered text-center">
                            <thead>
								<tr>
									<th>No.</th>
									<th>Employee Name</th>
									<th>Basic Salary</th>
									<th>House Rent Allowance</th>
									<th>Medical Allowance</th>
									<th>Transport  Allowance</th>
									<th>VAT</th>
									<th>Total</th>
									<th colspan="2">Action </th>
								</tr>
							</thead>
							<?php
                                $result = mysqli_query($conn,"SELECT * FROM salary_info");
                                $counter = 0;
                                while($row = mysqli_fetch_array($result)) {
								?>
								<tbody id="myTable">
									<tr>
										<td width="2%" ><?php echo ++$counter ;?></td>
										<td width="21%" ><?php echo $row["employee_name"]; ?></td>
										<td width="15%" ><?php echo $row["Basic_Salary"]; ?>.00 TK</td>
										<td width="10%" ><?php echo $row["House_rent"]; ?>.00 TK</td>
										<td width="10%" ><?php echo $row["Medical"]; ?>.00 TK</td>
										<td width="10%" ><?php echo $row["Transport"]; ?>.00 TK</td>
										<td width="13%"><?php echo $row["vat"]; ?>.00 TK</td>
										<td width="15%"><?php echo $row["total_salary"]; ?>.00 TK</td>
										<td width="2%" ><a class="btn btn-sm btn-info" href="Edit_salary_info.php?salary_id=<?php echo $row["salary_id"]; ?>"><i class="fa fa-edit"></i></a></td>
										<td width="2%" ><a class="btn btn-sm btn-danger" href="Delete_salary_info.php?salary_id=<?php echo $row["salary_id"]; ?>"><i class="fa fa-scissors"></i></a></td>
									</tr>
									<?php
									}
								?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			
		</div>
	</div><!-- .animated -->
</div><!-- .content -->

</div><!-- /#right-panel -->

<!-- Right Panel -->
	<?php include "includes/footer.php";}?>
