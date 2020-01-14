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
						<strong class="card-title">Requisition Information / Outdoor Work Information</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">
								<form action="save_out_emp_work.php" method="post" novalidate="novalidate" enctype=multipart/form-data"">
									<div class="row">
										<div class="col-4">
											<div class="form-group">
												<label for="employee_name" class=" form-control-label">Employee Name *</label>
												<select name="employee_name" id="employee_name" class="form-control">
													<option value="0">Please select</option>
													<?php
														$query= mysqli_query($conn,"select * from employee_info");
														while ($row=mysqli_fetch_assoc($query)){
															$employee_name=$row['employee_name'];
														?>
														<option  value="<?php echo $row['employee_name'];?>"><?php echo $row['employee_name'];?></option>
													<?php } ?>
													?>
												</select>
											</div>
										</div>
										<div class="col-5">
											<div class="form-group">
												<label for="requisition_title" class=" form-control-label">Requisition Title</label>
												<input type="text" name="requisition_title" oninput="CheckValue()" id="requisition_title" placeholder="Enter Requisition Title" class="form-control">
											</div>
										</div>
										<div class="col-3">
											<div class="form-group">
												<label for="requisition_date" class=" form-control-label">Date *</label>
												<input type="text" name="requisition_date" oninput="CheckValue()" id="datepicker" placeholder="Enter Date" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-2">
											<div class="form-group">
												<label for="requisition_time_from" class=" form-control-label">Time (From) *</label>
												<input type="text" name="requisition_time_from" oninput="CheckValue()" id="datepicker1" placeholder="From Time" class="form-control">
											</div>
										</div>
										<div class="col-2">
											<div class="form-group">
												<label for="requisition_time_to" class=" form-control-label">Time (To) *</label>
												<input type="text" name="requisition_time_to" oninput="CheckValue()" id="datepicker1" placeholder="To Time" class="form-control">
											</div>
										</div>
										<div class="col-2">
											<div class="form-group">
												<label for="requisition_enter" class=" form-control-label">Office Enter Time*</label>
												<input type="text" name="requisition_enter" oninput="CheckValue()" id="datepicker1" placeholder="Enter Time" class="form-control">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label for="requisition_details" class=" form-control-label">Requisition Details</label>
												<textarea name="requisition_details" id="requisition_details" rows="3" placeholder="Details..." class="form-control"></textarea>
											</div>
										</div>
									</div>
									<div>

										<button id="employee-button" type="submit" class="btn btn-sm btn-success btn-block" name="save" value="submit" onclick="return CheckValue2()"><i class="fa fa-plus"></i>&nbsp; Add New </button>
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
								<strong class="card-title">All Requisition Information</strong>
							</div>
							<div class="col-md-5">
								<input class="form-control" id="myInput" type="text" placeholder="Search..">
							</div>
						</div>
					</div>
					<div class="card-body">
						<table class="table table-striped table-bordered text-center" >
                            <thead>
								<tr>
									<th>No.</th>
									<th>Employee Name</th>
									<th>Requisition Title</th>
									<th>Date</th>
									<th>From Time </th>
									<th>To Time </th>
									<th>Office Enter Time</th>
									<th colspan="2">Action </th>
								</tr>
							</thead>
							<?php
                                $result = mysqli_query($conn,"SELECT * FROM out_work_info");
                                $counter = 0;
                                while($row = mysqli_fetch_array($result)) {
								?>
								<tbody id="myTable">
									<tr>
										<td><?php echo ++$counter ;?></td>
										<td><?php echo $row["employee_name"]; ?></td>
										<td><?php echo $row["requisition_title"]; ?></td>
										<td><?php echo $row["requisition_date"]; ?></td>
										<td><?php echo $row["requisition_time_from"]; ?></td>
										<td><?php echo $row["requisition_time_to"]; ?></td>
										<td><?php echo $row["requisition_enter"]; ?></td>
										<td>
											<a class="btn btn-sm btn-info" href="Edit_out_emp_work.php?requisition_id=<?php echo $row["requisition_id"]; ?>"><i class="fa fa-edit"></i>&nbsp;</a>

										</td>
										<td>

											<a class="btn btn-sm btn-danger" href="Delete_out_emp_work.php?requisition_id=<?php echo $row["requisition_id"]; ?>"><i class="fa fa-scissors"></i>&nbsp;</a>
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
<!-- Right Panel -->

	<?php include "includes/footer.php";}?>
