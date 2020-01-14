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
					<div class="card">
						<div class="card-header">
							<strong class="card-title">Company Information</strong>
						</div>
						<div class="card-body">
							<!-- Credit Card -->
							<div id="pay-invoice">
								<?php
									$result = mysqli_query($conn,"SELECT * FROM `company_info`");
									while($row = mysqli_fetch_array($result)) {
									?>
									<div class="card-body">
										
										
										
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label for="company_name" class=" form-control-label">Name</label>
													<input type="text"  value="<?php echo $row['company_name']; ?>" class="form-control" readonly>
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<label for="company_details" class=" form-control-label">Details</label>
													<input type="text"  value="<?php echo $row['company_details']; ?>" class="form-control" readonly>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<label for="company_address" class=" form-control-label">Address</label>
											<input type="text"  value="<?php echo $row['company_address']; ?>" class="form-control" readonly>
										</div>
										
										<div class="row">
											<div class="col-4">
												<div class="form-group">
													<label for="company_city" class=" form-control-label">City</label>
													<input type="text"  value="<?php echo $row['company_city']; ?>" class="form-control" readonly>
												</div>
											</div>
											<div class="col-4">
												<div class="form-group">
													<label for="company_street" class=" form-control-label">Street</label>
													<input type="text"  value="<?php echo $row['company_street']; ?>" class="form-control" readonly>
												</div>
											</div>
											<div class="col-4">
												<div class="form-group">
													<label for="company_zip" class=" form-control-label">Zip / Postal Code</label>
													<input type="text"  value="<?php echo $row['company_zip']; ?>" class="form-control" readonly>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label for="company_number" class=" form-control-label">Phone Number</label>
													<input type="text"  value="<?php echo $row['company_number']; ?>" class="form-control" readonly>
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<label for="company_2number" class=" form-control-label">Another Number</label>
													<input type="text"  value="<?php echo $row['company_2number']; ?>" class="form-control" readonly>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label for="company_email" class=" form-control-label">Email</label>
													<input type="text"  value="<?php echo $row['company_email']; ?>" class="form-control" readonly>
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<label for="company_fax" class=" form-control-label">Fax</label>
													<input type="text"  value="<?php echo $row['company_fax']; ?>" class="form-control" readonly>
												</div>
											</div>
										</div>
										
										
										<div>
											<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==5)){ ?>											
												<a type="button" class="btn btn-sm btn-info btn-block" href="Edit_Company.php?company_id=<?php echo $row["company_id"]; ?>"><i class="fa fa-edit"></i>&nbsp; Edit Company Info</a>												
											<?php } ?> 	
										</div>
										
										
									</div>
									<?php
									}
								?>
							</div>
							
						</div>
					</div> <!-- .card -->
					
				</div><!--/.col-->
				
				
				
				
			</div>
			
			
		</div><!-- .animated -->
	</div><!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include "includes/footer.php";}?>
