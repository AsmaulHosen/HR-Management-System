<?php 
    include 'includes/header.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	$email = $_SESSION['Email'];
    $result = mysqli_query($conn,"SELECT * FROM employee_info WHERE employee_email='$email'");
	
    $row= mysqli_fetch_array($result);
	
	if(isset($_POST['update'])){
		$emp_name = $_POST['employee_name'];
		$emp_gender = $_POST['employee_gender'];
		$emp_dob = $_POST['employee_dob'];
		$emp_contNum = $_POST['employee_contNum'];
		$emp_marital_status = $_POST['employee_marital_status'];
		$emp_nid = $_POST['employee_nid'];
		$pre_address = $_POST['present_address'];
		$perm_address = $_POST['permanent_address'];
		$father_name = $_POST['father_number'];
		$mother_name = $_POST['mother_number'];
		$email = $_SESSION['Email'];
		
		$sql="Update employee_info set employee_name = '$emp_name',employee_gender= '$emp_gender' , 
		employee_dob= '$emp_dob' , employee_contNum= '$emp_contNum' ,employee_marital_status= '$emp_marital_status',
		employee_nid= '$emp_nid' , present_address= '$pre_address', permanent_address= '$perm_address',
		father_name='$father_name',mother_name='$mother_name'
		where employee_email='$email'";
		
		$result=$conn->query($sql);
	}
	
?>
<div class="content mt-3 container">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4>Employee Information</h4>
					</div>
					<div class="card-body">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true"><i class="fa fa-user"></i>&nbsp; Profile</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="payroll-tab" data-toggle="tab" href="#payroll" role="tab" aria-controls="payroll" aria-selected="false"><i class="fa fa-money"></i>&nbsp; Payroll</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="edit-tab" data-toggle="tab" href="#edit" role="tab" aria-controls="edit" aria-selected="false"><i class="fa fa-edit (alias)"></i>&nbsp; Edit Profile</a>
							</li>  
							<li class="nav-item">
								<a class="nav-link" id="workflow-tab" data-toggle="tab" href="#workflow" role="tab" aria-controls="workflow" aria-selected="false"><i class="fa fa-stack-overflow"></i>&nbsp; Workflow</a>
							</li>  
							
						</ul>
						
						<div class="tab-content pl-3 p-1" id="myTabContent">
							<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="row" >
									<div class="col-md-3">										
										<img src="images/upload/<?php echo $row['newName'] ?>"   height="185px" width="200px"><br/>
										
										
										<hr/>
										<p><i class="fa fa-toggle-down (alias)"></i>&nbsp; ID Number : <?php  echo $row['employee_idno']; ?></p>
										<p><i class="fa fa-male"></i>&nbsp; Name : <?php  echo $row['employee_name']; ?></p>
										<p><i class="fa fa-phone"></i>&nbsp; Mobile : +88<?php  echo $row['employee_contNum']; ?></p>
										<p><i class="fa fa-home"></i>&nbsp; Address : <?php  echo $row['present_address']; ?></p>
										<p><i class="fa fa-user"></i>&nbsp; Type : <?php  echo $row['employee_type']; ?></p>
									</div>
									<div class="col-md-9">
										<div class="card-body">
											<table class="table">
												<thead>
													<tr>
														<th scope="col">Full Information</th>
														<th scope="col"></th>
														<th scope="col"></th>
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><i class="fa fa-male fa-female"></i>&nbsp; Gender</td>
														<td> : </td>
														<td><?php  echo $row['employee_gender']; ?></td>
													</tr>
													<tr>
														<td><i class="fa fa-calendar-o"></i>&nbsp; Date Of Birth</td>
														<td> : </td>
														<td><?php  echo $row['employee_dob']; ?></td>
													</tr>
													<tr>
														<td><i class="fa fa-calendar"></i>&nbsp; Joing Date</td>
														<td> : </td>
														<td><?php  echo $row['employee_joindate']; ?></td>
													</tr>
													<tr>
														<td><i class="fa fa-ambulance"></i>&nbsp; Emergency Number</td>
														<td> : </td>
														<td><?php  echo $row['employee_emg_contNum']; ?></td>
													</tr>
													<tr>
														<td><i class="fa fa-envelope"></i>&nbsp; Email Address</td>
														<td> : </td>
														<td><?php  echo $row['employee_email']; ?></td>
													</tr>
													<tr>
														<td><i class="fa fa-users"></i>&nbsp; Reference</td>
														<td> : </td>
														<td><?php  echo $row['employee_ref']; ?></td>
													</tr>
													<tr>
														<td><i class="fa fa-user"></i>&nbsp; Marital Status</td>
														<td> : </td>
														<td><?php  echo $row['employee_marital_status']; ?></td>
													</tr>
													<tr>
														<td><i class="fa fa-credit-card"></i>&nbsp; NID Number</td>
														<td> : </td>
														<td><?php  echo $row['employee_nid']; ?></td>
													</tr>
													<tr>
														<td><i class="fa fa-plane"></i>&nbsp; Passport ID</td>
														<td> : </td>
														<td><?php  echo $row['employee_passportid']; ?></td>
													</tr>
													<tr>
														<td><i class="fa fa-male"></i>&nbsp; Father Name</td>
														<td> : </td>
														<td><?php  echo $row['father_name']; ?></td>
													</tr>
													<tr>
														<td><i class="fa fa-female"></i>&nbsp; Mother Name</td>
														<td> : </td>
														<td><?php  echo $row['mother_name']; ?></td>
													</tr>
													<tr>
														<td><i class="fa fa-home"></i>&nbsp; Permanent Address</td>
														<td> : </td>
														<td><?php  echo $row['permanent_address']; ?></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								
							</div>
							<?php
								
								$username = $_SESSION['Name'];
								$result1 = mysqli_query($conn,"SELECT * FROM salary_info WHERE employee_name='$username'");
								
								$row= mysqli_fetch_array($result1);
								
								
							?>
							
							<div class="tab-pane fade" id="payroll" role="tabpanel" aria-labelledby="payroll-tab">
								<div class="row">
									<div class="col-md-5">
										<table class="table">
											<thead>
												<tr>
													<th colspan="2" scope="col" text-align="center">Salary Information</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Basic Salary</td>
													<td><?php  echo $row['Basic_Salary']; ?>.00 Taka</td>
												</tr>
												<tr>
													<td>House Rent Allowance</td>
													<td><?php  echo $row['House_rent']; ?>.00 Taka</td>
												</tr>
												<tr>
													<td>Medical Allowance </td>
													<td><?php  echo $row['Medical']; ?>.00 Taka</td>
												</tr>
												<tr>
													<td>Transport Allowance </td>
													<td><?php  echo $row['Transport']; ?>.00 Taka</td>
												</tr>
												<tr>
													<th>Sub Total </th>
													<th><?php echo $row['Basic_Salary']+$row['House_rent']+$row['Medical']+$row['Transport']; ?>.00 Taka</th>
												</tr>
												<tr>
													<td>Vat </td>
													<td><?php  echo $row['vat']; ?>.00 Taka</td>
												</tr>
												<tr>
													<th>Total Salary</th>
													<th><?php  echo $row['total_salary']; ?>.00 Taka</th>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-md-7">
										
									</div>
								</div>
							</div>
							
							
							<div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab">
								<div class="card-body">
									<form method="POST">
										<div class="row">
											<div class="col-md-6">
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-user"></i>&nbsp; Name</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="employee_name" id="employee_name" value="<?php echo $row['employee_name']; ?>"class="form-control">
														</div>
													</div>													
												</div>
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-male fa-female"></i>&nbsp; Gender</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="employee_gender" id="employee_gender" value="<?php echo $row['employee_gender']; ?>"class="form-control" disabled>
														</div>
													</div>													
												</div>
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-calendar-o"></i>&nbsp; Date Of Birth</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="employee_dob" id="employee_dob" value="<?php echo $row['employee_dob']; ?>"class="form-control">
														</div>
													</div>													
												</div>
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-mobile-phone (alias)"></i>&nbsp; Phone Number</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="employee_contNum" id="employee_contNum" value="<?php echo $row['employee_contNum']; ?>"class="form-control">
														</div>
													</div>													
												</div>
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-users"></i>&nbsp; Reference</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="employee_ref" id="employee_ref" value="<?php echo $row['employee_ref']; ?>"class="form-control" disabled>
														</div>
													</div>													
												</div>
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-plane"></i>&nbsp; Passport ID</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="employee_passportid" id="employee_passportid" value="<?php echo $row['employee_passportid']; ?>"class="form-control">
														</div>
													</div>													
												</div>
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-male"></i>&nbsp; Father Name</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="father_number" id="father_name" value="<?php echo $row['father_name']; ?>"class="form-control">
														</div>
													</div>													
												</div>
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-home"></i>&nbsp; Present Address</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="present_address" id="present_address" value="<?php echo $row['present_address']; ?>"class="form-control">
														</div>
													</div>													
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-unsorted (alias)"></i>&nbsp; Type</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="employee_type" id="employee_type" value="<?php echo $row['employee_type']; ?>"class="form-control" disabled>
														</div>
													</div>													
												</div>
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-envelope"></i>&nbsp; Email Address</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="employee_email" id="employee_email" value="<?php echo $row['employee_email']; ?>"class="form-control" disabled>
														</div>
													</div>													
												</div>
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-calendar"></i>&nbsp; Joing Date</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="employee_joindate" id="employee_joindate" value="<?php echo $row['employee_joindate']; ?>"class="form-control" disabled>
														</div>
													</div>													
												</div>
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-ambulance"></i>&nbsp; Emergency Number</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="employee_emg_contNum" id="employee_emg_contNum" value="<?php echo $row['employee_emg_contNum']; ?>"class="form-control">
														</div>
													</div>													
												</div>
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-user"></i>&nbsp; Marital Status</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<select name="employee_marital_status" id="employee_marital_status" class="form-control">
																<option value="0">Please select</option>
																<option value="Married" <?php if ($row['employee_marital_status']=='Married'){echo "selected";}?>>Married</option>
																<option value="Single" <?php if ($row['employee_marital_status']=='Single'){echo "selected";}?>>Single</option>
																<option value="Divorced" <?php if ($row['employee_marital_status']=='Divorced'){echo "selected";}?>>Divorced</option>
																<option value="Other" <?php if ($row['employee_marital_status']=='Other'){echo "selected";}?>>Other</option>
															</select>
															
														</div>
													</div>													
												</div>
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-credit-card"></i>&nbsp; NID Number</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="employee_nid" id="employee_nid" value="<?php echo $row['employee_nid']; ?>"class="form-control">
														</div>
													</div>													
												</div>
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-female"></i>&nbsp; Mother Name</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="mother_number" id="mother_name" value="<?php echo $row['mother_name']; ?>"class="form-control">
														</div>
													</div>													
												</div>
												<div class="row">
													<div class="col-4">
														<label class=" form-control-label"><i class="fa fa-home"></i>&nbsp; Permanent Address</label>
													</div>
													<div class="col-8">
														<div class="form-group">
															<input type="text" name="permanent_address" id="permanent_address" value="<?php echo $row['permanent_address']; ?>"class="form-control">
														</div>
													</div>													
												</div>
											</div>
											<div class="col-md-12">
												
												<button class="btn btn-sm btn-success float-right" name="update" ><i class="fa fa-edit"></i>&nbsp; Update</button>
											</div>
										</div>		
									</form>
									
									
								</div>
							</div>
							<div class="tab-pane fade" id="workflow" role="tabpanel" aria-labelledby="workflow-tab">
								<h3>Menu r</h3>
								
							</div>
						</div>
					</div>
				</div>
				
			</div><!--/.col-->
		</div>
	</div><!-- .animated -->
</div><!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<?
	include 'includes/footer.php' ;
	?>																							