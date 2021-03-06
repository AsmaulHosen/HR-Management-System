<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';

    $result = mysqli_query($conn,"SELECT * FROM dept_info WHERE dept_id='" . $_GET['dept_id'] . "'");
    $row= mysqli_fetch_array($result);
?>
<div class="content mt-3">
	<div class="animated fadeIn">


		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Edit Department Name</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">

								<form action="save_edit_dept_info.php" method="post" onsubmit="return CheckValue();" novalidate="novalidate">
									<input type="hidden" name="dept_id"  value="<?php echo $row['dept_id']; ?>">
                                    <div class="form-group">
										<label for="dept_name" class=" form-control-label">Department Name *</label>
                    <input type="text" name="dept_name" oninput="CheckValue()" id="dept_name" value="<?php echo $row['dept_name']; ?>" class="form-control">
                  </div>
									<div>
										<button id="button" type="submit" class="btn btn-sm btn-info btn-block" name="save" value="submit"><i class="fa fa-edit"></i>&nbsp; Edit Department</button>

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
		var w = document.getElementById('dept_name').value;
		if(!isNaN(w)){
			swal('Please enter only letter', '', 'warning');
			document.getElementById('dept_name').value='';
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
