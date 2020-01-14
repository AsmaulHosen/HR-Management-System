<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	
    $result = mysqli_query($conn,"SELECT * FROM company_info WHERE company_id='" . $_GET['company_id'] . "'");
    $row= mysqli_fetch_array($result);
?>
<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Company Information</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">
								<form action="Save_Edit_Company.php" method="post" onsubmit="return CheckValue();" novalidate="novalidate">
                                    <input type="hidden" name="company_id" value="<?php echo $row['company_id']; ?>" />
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label for="company_name" class=" form-control-label">Name</label>
												<input type="text" name="company_name" id="company_name" oninput="CheckValue()" value="<?php echo $row['company_name']; ?>"  class="form-control">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label for="company_address" class=" form-control-label">Address</label>
												<input type="text" name="company_address" id="company_address" oninput="CheckValue()" value="<?php echo $row['company_address']; ?>"class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="company_details" class=" form-control-label">Details</label>
										<input type="text" name="company_details" id="company_details" value="<?php echo $row['company_details']; ?>"class="form-control">
									</div>
									
									<div class="row">
										<div class="col-4">
											<div class="form-group">
												<label for="company_city" class=" form-control-label">City</label>
												<input type="text" name="company_city"  id="company_city" oninput="CheckValue()" value="<?php echo $row['company_city']; ?>" class="form-control">
											</div>
										</div>
										<div class="col-4">
											<div class="form-group">
												<label for="company_street" class=" form-control-label">Street</label>
												<input type="text" name="company_street" id="company_street" value="<?php echo $row['company_street']; ?>"  class="form-control">
											</div>
										</div>
										<div class="col-4">
											<div class="form-group">
												<label for="company_zip" class=" form-control-label">Zip / Postal Code</label>
												<input type="text" name="company_zip" id="company_zip" oninput="CheckValue()" value="<?php echo $row['company_zip']; ?>" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label for="company_number" class=" form-control-label">Phone Number</label>
												<input type="text" name="company_number" id="company_number" oninput="CheckValue()" value="<?php echo $row['company_number']; ?>"  class="form-control">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label for="company_2number" class=" form-control-label">Another Number</label>
												<input type="text" name="company_2number" id="company_2number" oninput="CheckValue()" value="<?php echo $row['company_2number']; ?>"  class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label for="company_email" class=" form-control-label">Email</label>
												<input type="text" name="company_email"  id="company_email" value="<?php echo $row['company_email']; ?>" class="form-control">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label for="company_fax" class=" form-control-label">Fax</label>
												<input type="text" name="company_fax" id="company_fax" value="<?php echo $row['company_fax']; ?>" class="form-control">
											</div>
										</div>
									</div>
									
									<div>
										<button id="button" type="submit" class="btn btn-sm btn-info btn-block" name="save" onclick="return CheckValue2()" value="submit"><i class="fa fa-edit"></i>&nbsp; Submit Employee Type</button>
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
		var name = document.getElementById('company_name').value;
		var address = document.getElementById('company_address').value;
		var city = document.getElementById('company_city').value;
		var street = document.getElementById('company_street').value;
		var zip = document.getElementById('company_zip').value;
		var num = document.getElementById('company_number').value;
		var num2 = document.getElementById('company_2number').value;
		
		
		if(!isNaN(name)){
			swal('Please enter only letter', '', 'warning');
			document.getElementById('company_name').value='';
			return false;
		}
		if(!isNaN(address)){
			swal('Please enter only letter', '', 'warning');
			document.getElementById('company_address').value='';
			return false;
		}
		if(!isNaN(city)){
			swal('Please enter only letter', '', 'warning');
			document.getElementById('company_city').value='';
			return false;
		}
		if(isNaN(zip)){
			swal('Please enter only Number', '', 'warning');
			document.getElementById('company_zip').value='';
			return false;
		}
		if(isNaN(num)){
			swal('Please enter only Number', '', 'warning');
			document.getElementById('company_number').value='';
			return false;
		}
		if(isNaN(num2)){
			swal('Please enter only Number', '', 'warning');
			document.getElementById('company_2number').value='';
			return false;
		}
		
	}
	function CheckValue2(){
		var name = document.getElementById('company_name').value;
		var address = document.getElementById('company_address').value;
		var details = document.getElementById('company_details').value;
		var city = document.getElementById('company_city').value;
		var street = document.getElementById('company_street').value;
		var zip = document.getElementById('company_zip').value;
		var num = document.getElementById('company_number').value;
		var num2 = document.getElementById('company_2number').value;
		var email = document.getElementById('company_email').value;
		var fax = document.getElementById('company_fax').value;
		
		if(name==""){
			swal('Please Input Company Name !', '', 'warning')
			return false;
		}
		if(address==""){
			swal('Please Input Company Address  !', '', 'warning')
			return false;
		}
		if(details==""){
			swal('Please Input Company Details !', '', 'warning')
			return false;
		}
		if(city==""){
			swal('Please Input Company City !', '', 'warning')
			return false;
		}
		if(street==""){
			swal('Please Input Company Street !', '', 'warning')
			return false;
		}
		if(zip==""){
			swal('Please Input Company Postal Code !', '', 'warning')
			return false;
		}
		if(num==""){
			swal('Please Input Contract Number !', '', 'warning')
			return false;
		}
		if(num2==""){
			swal('Please Input Another Number!', '', 'warning')
			return false;
		}
		if(email==""){
			swal('Please Input Company Email Address !', '', 'warning')
			return false;
		}
		if(fax==""){
			swal('Please Input Company Fax Number !', '', 'warning')
			return false;
		}
	}
	
</script>
</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include "includes/footer.php";?>
