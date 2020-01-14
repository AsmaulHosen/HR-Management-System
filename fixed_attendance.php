<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==3)){
?>
<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						
						<div class="row">
							<div class="col-md-7">
								<strong class="card-title">Fix Attendance</strong>
							</div>
							<div class="col-md-5">
								<input class="form-control" id="myInput" type="text" placeholder="Search..">
							</div>
						</div>
						
					</div>
					<div class="card-body">
						<table class="table table-striped table-bordered text-center" text-align="center">
                            <thead>
								<tr>
									<th>No.</th>
									<th>Employee ID</th>
									<th>Employee Name</th>
									<th>Date</th>
									<th>In Time</th>
									<th>Out Time</th>
									<th>Weekend</th>

									<th colspan="2">Action</th>
								</tr>
							</thead>
                            <?php
								$result = mysqli_query($conn,"SELECT * FROM attendance_info where on_duty='' or off_duty='' ORDER BY a_date DESC" );
								$counter = 0;
								while($row = mysqli_fetch_array($result)) {
								?>
								<tbody id="myTable">
									<tr>
										<td><?php echo ++$counter ;?></td>
										<td><?php echo $row["employee_id"]; ?></td>
										<td><?php echo $row["employee_name"]; ?></td>
										<td><?php echo $row["a_date"]; ?></td>
										<td>00:00</td>
										<td>00:00</td>
										<td><?php echo $row["weekend"]; ?></td>
										<td><a href="#edit<?php echo $row['employee_id']; ?>" data-toggle="modal" class="btn btn-sm btn-info"><i class="fa fa-wrench"></i>&nbsp;  Change</a>
											<?php include('Edit_Employee_attendace.php'); ?>


										</td>
									</tr>
								</tbody>
								<?php
								}
							?>
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
