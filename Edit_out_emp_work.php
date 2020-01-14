<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';

    $result = mysqli_query($conn,"SELECT * FROM out_work_info WHERE requisition_id='" . $_GET['requisition_id'] . "'");
    $row= mysqli_fetch_array($result);
?>
<div class="content mt-3">
	<div class="animated fadeIn">


		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Edit Requisition Information / Outdoor Work Information</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">

								<form action="save_edit_employee_type.php" method="post" onsubmit="return CheckValue();" novalidate="novalidate">
									<input type="hidden" name="requisition_id"  value="<?php echo $row['requisition_id']; ?>">
                  <div class="row">
										<div class="col-4">
                      <label for="employee_name" class=" form-control-label">Employee Name *</label>
                      <select name="employee_name" id="employee_name" class="form-control">
                        <option><?php echo $row['employee_name'];?></option>
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
                    <div class="col-5">
                      <label for="requisition_title" class=" form-control-label">Requisition Title</label>
                      <input type="text" name="requisition_title" oninput="CheckValue()" id="requisition_title" value="<?php echo $row['requisition_title']; ?>"class="form-control">
                    </div>
                    <div class="col-3">
                      <label for="requisition_date" class=" form-control-label">Date</label>
                      <input type="text" name="requisition_date"  id="requisition_date" value="<?php echo $row['requisition_date']; ?>"class="form-control">
                    </div>
                  </div>
                  <div class="row">
										<div class="col-2">
											<div class="form-group">
												<label for="requisition_time_from" class=" form-control-label">Time (From) *</label>
												<input type="text" name="requisition_time_from"  id="requisition_time_from" value="<?php echo $row['requisition_time_from']; ?>"class="form-control">
											</div>
										</div>
										<div class="col-2">
											<div class="form-group">
												<label for="requisition_time_to" class=" form-control-label">Time (To) *</label>
												<input type="text" name="requisition_time_to" id="requisition_time_to" value="<?php echo $row['requisition_time_to']; ?>"class="form-control">
											</div>
										</div>
										<div class="col-2">
											<div class="form-group">
												<label for="requisition_enter" class=" form-control-label">Office Enter Time*</label>
												<input type="text" name="requisition_enter"  id="requisition_enter" value="<?php echo $row['requisition_enter']; ?>"class="form-control">
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
										<button id="button" type="submit" class="btn btn-sm btn-info btn-block" name="save" value="submit"><i class="fa fa-edit"></i>&nbsp; Edit Employee Type</button>

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
		var w = document.getElementById('employee_type').value;
		if(!isNaN(w)){
			swal('Please enter only letter', '', 'warning');
			document.getElementById('employee_type').value='';
		}

		if(w==""){
			swal('Please Input something', '', 'warning');
			return false;
		}
	}
</script>
</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include "includes/footer.php";?>
