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
				
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-md-7">
									<strong class="card-title">All Employee Information</strong>
								</div>
								<div class="col-md-5">
									<input class="form-control" id="myInput" type="text" placeholder="Search..">
								</div>
							</div>
						</div>
						<div class="card-body">
						<strong class="card-title">Active Employee Information</strong>
							<table id="bootstrap-data-table" class="table table-striped table-bordered text-center">
								<thead>
									<tr>
										<th>No.</th>
										<th>Name</th>
										<th>Type</th>
										<th>ID Number</th>
										<th>Contact Number</th>
										<th>Email Address</th>
										<th>Active or Inactive</th>
										
										<th colspan="2"Action >Action</th>
									</tr>
								</thead>
								<?php
									$result = mysqli_query($conn,"SELECT * FROM employee_info where employee_status='Active'");
									$counter = 0;
									while($row = mysqli_fetch_array($result)) {
									?>
									<tbody id="myTable">
										<tr>
											<td><?php echo ++$counter ;?></td>
											<td><?php echo $row["employee_name"]; ?></td>
											<td><?php echo $row["employee_type"]; ?></td>
											<td><?php echo $row["employee_idno"]; ?></td>
											<td><?php echo $row["employee_contNum"]; ?></td>
											<td><?php echo $row["employee_email"]; ?></td>											
											<td>
												<a href="#editempAI<?php echo $row['employee_email']; ?>" data-toggle="modal" class="btn btn-sm btn-light"><i class="fa fa-wrench"></i> &nbsp; <?php echo $row["employee_status"]; ?> </a>
												<?php include('Edit_empl_AI.php'); ?>
											</td>											
											<td><a href="#view<?php echo $row['employee_id']; ?>" data-toggle="modal" class="btn btn-sm btn-secondary mb-1"><i class="fa fa-eye"></i></a>
												<?php include('view_each_Employee.php'); ?>
											</td>
											
										</tr>
										<?php
										}
									?>
									
								</tbody>
							</table>
							<hr/>
							<hr/>
							<strong class="card-title">Inactive Employee Information</strong>
							<table id="bootstrap-data-table" class="table table-striped table-bordered text-center">
								<thead>
									<tr>
										<th>No.</th>
										<th>Name</th>
										<th>Type</th>
										<th>ID Number</th>
										<th>Contact Number</th>
										<th>Email Address</th>
										<th>Active or Inactive</th>
										
										<th colspan="2"Action >Action</th>
									</tr>
								</thead>
								<?php
									$result = mysqli_query($conn,"SELECT * FROM employee_info where employee_status='Inactive'");
									$counter = 0;
									while($row = mysqli_fetch_array($result)) {
									?>
									<tbody id="myTable" style="background-color:#808080; color:#ffffff">
										<tr>
											<td><?php echo ++$counter ;?></td>
											<td><?php echo $row["employee_name"]; ?></td>
											<td><?php echo $row["employee_type"]; ?></td>
											<td><?php echo $row["employee_idno"]; ?></td>
											<td><?php echo $row["employee_contNum"]; ?></td>
											<td><?php echo $row["employee_email"]; ?></td>											
											<td>
												<a href="#editempAI<?php echo $row['employee_email']; ?>" data-toggle="modal" class="btn btn-sm btn-dark"><i class="fa fa-wrench"></i> &nbsp; <?php echo $row["employee_status"]; ?> </a>
												<?php include('Edit_empl_AI.php'); ?>
											</td>											
											
											<td><a class="btn btn-sm btn-danger" href="Delete_Employee.php?employee_id=<?php echo $row["employee_id"]; ?>"><i class="fa fa-scissors"></i></a>
											</td>
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
	
	
	<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	<div class="modal-header">
	<h5 class="modal-title" id="scrollmodalLabel">Employee Information</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	
	<div class="modal-body table table-striped text-center" id="printBody" >
	
	</div>
	<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	<button type="button" class="btn btn-info" onclick="printElem('printBody')"><i class="fa fa-print"></i> Print</button>
	</div>
	
	</div>
	</div>
	</div>
	
	</div><!-- /#right-panel -->
	
	<!-- Right Panel -->
	<?php include "includes/footer.php";}?>
		