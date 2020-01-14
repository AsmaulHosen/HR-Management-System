<div class="modal fade" id="view<?php echo $row['employee_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog modal-lg" >
		<div class="modal-content" style="background:GhostWhite ;" >
			<div class="modal-header">
				<h5>Employee Information</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
					$view=mysqli_query($conn,"select * from employee_info where employee_id='".$row['employee_id']."'");
					$erow=mysqli_fetch_array($view);
				?>
				<div class="container-fluid">
                    <hr/>
                    <div class="row">
						<div class="col-lg-7">
							<div class="col-lg-12">
								<br/>
								<p><font face="verdana" color="gray" size="7px"><?php echo $row["employee_name"]; ?></font></p>
							</div>

						</div>
						<div class="col-lg-5">
							<img class="align-self-center rounded-circle mr-3" style="width:80px; height:80px;" alt="" src="images/upload/<?php echo $row['newName'] ?>">

						</div>
					</div>
                    <hr/>

                    <div class="row">
						<div class="col-lg-6">
							<table class="table table-sm">
								<tbody>
									<tr>
										<td style="font-weight:bold;">ID Number</td>
										<td><?php echo $row["employee_idno"]; ?></td>
									</tr>
									<tr>
										<td style="font-weight:bold;">Department </td>
										<td><?php echo $row["employee_dept"]; ?></td>
									</tr>
									<tr>
										<td style="font-weight:bold;">Type</td>
										<td><?php echo $row["employee_type"]; ?></td>
									</tr>
									<tr>
										<td style="font-weight:bold;">Date of Birth</td>
										<td><?php echo $row["employee_dob"]; ?></td>
									</tr>
									<tr>
										<td style="font-weight:bold;">Contract No.</td>
										<td><?php echo $row["employee_contNum"]; ?></td>
									</tr>
									<tr>
										<td style="font-weight:bold;">Email Address</td>
										<td><?php echo $row["employee_email"]; ?></td>
									</tr>
									<tr>
										<td style="font-weight:bold;">Marital Status</td>
										<td><?php echo $row["employee_marital_status"]; ?></td>
									</tr>
									<tr>
										<td style="font-weight:bold;">NID</td>
										<td><?php echo $row["employee_nid"]; ?></td>
									</tr>
									<tr>
										<td style="font-weight:bold;">Father Name</td>
										<td><?php echo $row["father_name"]; ?></td>
									</tr>
									<tr>
										<td style="font-weight:bold;">Present Address</td>
										<td><?php echo $row["present_address"]; ?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-lg-6">
							<table class="table table-sm">
								<tbody>
									<tr>
										<td><label></label </td>
											<td> </td>
										</tr>
										<tr>
											<td style="font-weight:bold;">Designation </td>
											<td><?php echo $row["employee_desgn"]; ?></td>
										</tr>
										<tr>
											<td style="font-weight:bold;">Gender</td>
											<td><?php echo $row["employee_gender"]; ?></td>
										</tr>
										<tr>
											<td style="font-weight:bold;">Joining Date</td>
											<td><?php echo $row["employee_joindate"]; ?></td>
										</tr>
										<tr>
											<td style="font-weight:bold;">Emergency Contract No.</td>
											<td><?php echo $row["employee_emg_contNum"]; ?></td>
										</tr>
										<tr>
											<td style="font-weight:bold;">Reference</td>
											<td><?php echo $row["employee_ref"]; ?></td>
										</tr>
										<tr>
											<td style="font-weight:bold;"><label></label </td>
												<td> </td>
											</tr>
											<tr>
												<td style="font-weight:bold;">Passport No.</td>
												<td><?php echo $row["employee_passportid"]; ?></td>
											</tr>
											<tr>
												<td style="font-weight:bold;">Mother Name</td>
												<td><?php echo $row["mother_name"]; ?></td>
											</tr>
											<tr>
												<td style="font-weight:bold;">Permanent Address</td>
												<td><?php echo $row["permanent_address"]; ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-success"  ><span class="glyphicon glyphicon-check"></span> Print</button>

					</div>
				</div>
			</div>
		</div>
