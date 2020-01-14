<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==5)){
?>
<div class="content mt-3">
	<div class="animated fadeIn">
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card sm">
					<div class="card-header">
						<strong class="card-title">Employee Information</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">
								<form action="save_employee.php" method="post" onsubmit="return validmail()" enctype="multipart/form-data" id="employee_form">
									<div class="row">
										<div class="col-5">
											<div class="form-group">
												<label for="employee_name" class=" form-control-label">Name *</label>
												<input type="text" name="employee_name" oninput="CheckValue()" id="employee_name" placeholder="Enter employee name" class="form-control">
												
											</div>
										</div>
										<div class="col-4">
											<div class="form-group">
												<label for="employee_type" class=" form-control-label">Employee Type *</label>
												<select name="employee_type"  id="employee_type" class="form-control">
													<option value="0">Please select</option>
													<?php
														$query= mysqli_query($conn,"select * from employee_type");
														while ($row=mysqli_fetch_assoc($query)){
															$employee_type_id=$row['employee_type_id'];
															$employee_type=$row['employee_type'];
														?>
														<option  value="<?php echo $row['employee_type'];?>"><?php echo $row['employee_type'];?></option>
													<?php } ?>
													?>
												</select>
												
											</div>
										</div>
                                        <div class="col-3">
											<div class="form-group">
												<label for="employee_gender" class=" form-control-label">Gender *</label>
												<select name="employee_gender"  id="employee_gender" class="form-control">
													<option value="0">Please select</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
													<option value="Others">Others</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-4">
											<div class="form-group">
												<label for="employee_dept" class=" form-control-label">Department *</label>
												<select name="employee_dept"  id="employee_dept" class="form-control">
													<option value="0">Please select</option>
													<?php
														$query= mysqli_query($conn,"select * from dept_info");
														while ($row=mysqli_fetch_assoc($query)){
															$dept_name=$row['dept_name'];
														?>
														<option  value="<?php echo $row['dept_name'];?>"><?php echo $row['dept_name'];?></option>
													<?php } ?>
													?>
												</select>
											</div>
										</div>
										<div class="col-4">
											<div class="form-group">
												<label for="employee_desgn" class=" form-control-label">Designation *</label>
												<select name="employee_desgn"  id="employee_desgn" class="form-control">
													<option value="0">Please select</option>
													<?php
														$query= mysqli_query($conn,"select * from desgn_info");
														while ($row=mysqli_fetch_assoc($query)){
															$desgn_name=$row['desgn_name'];
														?>
														<option  value="<?php echo $row['desgn_name'];?>"><?php echo $row['desgn_name'];?></option>
													<?php } ?>
													?>
												</select>
											</div>
										</div>
										<div class="col-4">
											<div class="form-group">
												<label for="employee_pay" class=" form-control-label">Pay Type *</label>
												<select name="employee_pay"  id="employee_pay" class="form-control">
													<option value="0">Please select</option>
													<option value="Cash">Cash</option>
													<option value="Bank">Bank</option>
													<option value="Mobile">Mobile</option>
													<option value="Debit Card">Debit Card</option>
													<option value="Credit card">Credit card</option>
													<option value="Check">Check</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-4">
											<div class="form-group">
												<label for="employee_dob" class=" form-control-label">Date of Birth *</label>
												<input type="text" name="employee_dob" oninput="CheckValue()" id="from" placeholder="Enter Date of Birth" class="form-control">
											</div>
										</div>
										<div class="col-4">
											<div class="form-group">
												<label for="employee_joindate" class=" form-control-label">Joining Date *</label>
												<input type="text" name="employee_joindate" oninput="CheckValue()" id="to" placeholder="Enter Join Date" class="form-control">
											</div>
										</div>
										<div class="col-4">
											<div class="form-group">
												<label for="fileToUpload" class=" form-control-label">Image *</label>
												<div class="form-control">
													
													<input type="file" name="fileToUpload" id="image" oninput="CheckValue(this);"  >
												</div>
												
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-3">
											<div class="form-group">
												<label for="employee_contNum" class=" form-control-label">Contact Number *</label>
												<input type="text" name="employee_contNum" oninput="CheckValue()" id="employee_contNum" placeholder="Enter ID number" class="form-control">
											</div>
										</div>
										<div class="col-5">
											<div class="form-group">
												<label for="employee_email" class=" form-control-label">Email Address *</label>
												<input type="text" name="employee_email" onchange="validmail()" id="employee_email" placeholder="Enter Email Address" class="form-control">
											</div>
										</div>
										<div class="col-4">
											<label for="employee_ref" class=" form-control-label">Reference *</label>
											<select name="employee_ref" id="employee_ref" class="form-control">
												<option value="0">Please select</option>
												<option value="No">No</option>
												<?php
													$query= mysqli_query($conn,"select * from employee_info");
													while ($row=mysqli_fetch_assoc($query)){
														$employee_name=$row['employee_name'];
														$employee_name=$row['employee_name'];
														
													?>
													<option  value="<?php echo $row['employee_name'];?>"><?php echo $row['employee_name'];?></option>
												<?php } ?>
												?>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											<div class="form-group">
												<label for="employee_marital_status" class=" form-control-label">Marital Status *</label>
												<select name="employee_marital_status" id="employee_marital_status" class="form-control">
													<option value="0">Please select</option>
													<option value="Married">Married</option>
													<option value="Single">Single</option>
													<option value="Divorced">Divorced</option>
													<option value="Other">Other</option>
												</select>
											</div>
										</div>
										<div class="col-5">
											<div class="form-group">
												<label for="employee_nid" class=" form-control-label">NID</label>
												<input type="text" name="employee_nid" oninput="CheckValue()" id="employee_nid" placeholder="Enter NID" class="form-control">
											</div>
										</div>
										<div class="col-4">
											<label for="employee_passportid" class=" form-control-label">Passport ID</label>
											<input type="text" name="employee_passportid" oninput="CheckValue()"  id="employee_passportid" placeholder="Enter Passport ID" class="form-control">
										</div>
									</div>
									<div>
										
										<button id="employee-button" type="submit" class="btn btn-sm btn-success btn-block" name="save" value="submit" onclick="return CheckValue2()"><i class="fa fa-plus"></i>&nbsp; Add Employee </button>
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
	function CheckValue(sender){
		var name = document.getElementById('employee_name').value;
		var type = document.getElementById('employee_type').value;
		var gender = document.getElementById('employee_gender').value;
		var dob = document.getElementById('from').value;
		var join = document.getElementById('to').value;
		var cont = document.getElementById('employee_contNum').value;
		var email = document.getElementById('employee_email').value;
		var ref = document.getElementById('employee_ref').value;
		var marital = document.getElementById('employee_marital_status').value;
		var nid = document.getElementById('employee_nid').value;
		var image = document.getElementById('image').value;
		
		var validExtension = ".jpg";
			var fileExtension = sender.value;
			fileExtension = fileExtension.substring(fileExtension.lastIndexOf('.'));
			if (fileExtension != validExtension) {
			swal('Uploaded image is Not image file', '', 'warning');
			document.getElementById('image').value='';
			return false;
			}
		
		if(!isNaN(name)){
			swal('Please enter only letter', '', 'warning');
			document.getElementById('employee_name').value='';
			return false;
		}
		if(isNaN(cont)){
			swal('Please enter only Number', '', 'warning');
			document.getElementById('employee_contNum').value='';
			return false;
		}
		if(isNaN(nid)){
			swal('Please enter only Number', '', 'warning');
			document.getElementById('employee_nid').value='';
			return false;
		}
		
		
		
	}
	
	function validmail(){
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById('employee_email').value)){
				return (true)
			} else{
			swal('invalid email', '', 'warning');
			
				return (false)	
			}
		var cont = document.getElementById('employee_contNum').value;
		
		
	}
	
	function CheckValue2(){
		var name = document.getElementById('employee_name').value;
		var type = document.getElementById('employee_type').value;
		var gender = document.getElementById('employee_gender').value;
		var dob = document.getElementById('from').value;
		var join = document.getElementById('to').value;
		var cont = document.getElementById('employee_contNum').value;
		var email = document.getElementById('employee_email').value;
		var ref = document.getElementById('employee_ref').value;
		var marital = document.getElementById('employee_marital_status').value;
		var nid = document.getElementById('employee_nid').value;
		
		if( document.getElementById("image").files.length == 0 ){
			swal('Please upload image !', '', 'warning')
			return false;
		}
		if(name==""){
			swal('Please Input Employee Name !', '', 'warning')
			return false;
		}
		if(dob==""){
			swal('Please Input Employee Date of Birth !', '', 'warning')
			return false;
		}
		if(join==""){
			swal('Please Input Employee Joining Date !', '', 'warning')
			return false;
		}
		if(cont==""){
			swal('Please Input Employee Contact Number !', '', 'warning')
			return false;
		}
		if(email==""){
			swal('Please Input Employee Email !', '', 'warning')
			return false;
		}
		
		if(type=="0"){
			swal('Please select Employee Type', '', 'warning')
			return false;
		}
		if(gender=="0"){
			swal('Please select Employee Gender', '', 'warning')
			return false;
		}
		if(ref=="0"){
			swal('Please select Employee Reference', '', 'warning')
			return false;
		}
		if(marital=="0"){
			swal('Please select Employee Marital Status', '', 'warning')
			return false;
		}
		if(cont.length != 11){
			swal('mobile number contains 11 digit', '', 'warning');
			document.getElementById('employee_contNum').value='';
			return false;
		}
		
	}
	
</script>
<!-- Right Panel -->
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>
	<?php } ?>
</html>
