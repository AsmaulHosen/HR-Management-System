<div class="modal fade" id="edit<?php echo $row['employee_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				
			</div>
			<div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from attendance_info where a_date='".$row['a_date']."' and employee_id='".$row['employee_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
					<form method="POST" action="save_edit_attendance.php" method="post">
						<input type="hidden" name="employee_id"  value="<?php echo $row['employee_id']; ?>">
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Employee Name</label>
							</div>
							<div class="col-lg-8">
								<input type="text" name="employee_name" class="form-control" value="<?php echo $erow['employee_name']; ?>" readonly>
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Date</label>
							</div>
							<div class="col-lg-8">
								<input type="text" name="a_date" class="form-control" value="<?php echo $erow['a_date']; ?>" readonly>
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">In Time:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" name="on_duty" class="form-control" value="<?php echo $erow['on_duty']; ?>">
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Out Time:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" name="off_duty" class="form-control" value="<?php echo $erow['off_duty']; ?>">
							</div>
						</div>
					</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
				</div>
			</form>
		</div>
	</div>
</div>
