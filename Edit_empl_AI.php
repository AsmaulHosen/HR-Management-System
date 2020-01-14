<div class="modal fade" id="editempAI<?php echo $row['employee_email']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5>Change Employee Status</h5>
			</div>
			<div class="modal-body">
				<?php
					
					$edit=mysqli_query($conn,"select * from employee_info where employee_email='".$row['employee_email']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
					<form  action="save_edit_emp_al.php" method="post">
						<input type="hidden" name="employee_email"  value="<?php echo $row['employee_email']; ?>">
						
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Active or Inactive</label>
							</div>
							<div class="col-lg-8">
								<select name="employee_status" id="employee_status" class="form-control">
									<option value="Active" <?php if ($row['employee_status']=='Active'){echo "selected";}?>>Active</option>
									<option value="Inactive" <?php if ($row['employee_status']=='Inactive'){echo "selected";}?>>Inactive</option>
									
									
								</select>
								
							</div>
						</div>
						<div style="height:10px;"></div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button name="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
				</div>
			</form>
		</div>
	</div>
	</div>
		