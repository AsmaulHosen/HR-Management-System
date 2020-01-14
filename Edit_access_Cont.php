<div class="modal fade" id="edit<?php echo $row['User_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5>Change Access Control</h5>
			</div>
			<div class="modal-body">
				<?php
					
					$edit=mysqli_query($conn,"select * from user where User_ID='".$row['User_ID']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
					<form  action="save_edit_acess_cont.php" method="post">
						<input type="hidden" name="User_ID"  value="<?php echo $row['User_ID']; ?>">
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">User Name</label>
							</div>
							<div class="col-lg-8">
								<input type="text" name="Name" class="form-control" value="<?php echo $erow['Name']; ?>" readonly>
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Access No</label>
							</div>
							<div class="col-lg-8">
								<select name="Acess" id="Acess" class="form-control">
									<option value="1" <?php if ($row['Acess']=='1'){echo "selected";}?>>1</option>
									<option value="2" <?php if ($row['Acess']=='2'){echo "selected";}?>>2</option>
									<option value="3" <?php if ($row['Acess']=='3'){echo "selected";}?>>3</option>
									<option value="4" <?php if ($row['Acess']=='4'){echo "selected";}?>>4</option>
									<option value="5" <?php if ($row['Acess']=='5'){echo "selected";}?>>5</option>
									<option value="6" <?php if ($row['Acess']=='6'){echo "selected";}?>>6</option>
									
								</select>
								
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-12">
								<label style="position:relative; top:7px; color:red">Please Input password to confirm access update</label>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Password</label>
							</div>
							<div class="col-lg-8">
								<input type="password" name="pass" class="form-control" placeholder="Password"  >
								
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
		