<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	
    $result = mysqli_query($conn,"SELECT * FROM employee_type WHERE employee_type_id='" . $_GET['employee_type_id'] . "'");
    $row= mysqli_fetch_array($result);
?>
<div class="content mt-3">
	<div class="animated fadeIn">
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Edit Employee Type</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">
								
								<form action="save_edit_employee_type.php" method="post" onsubmit="return CheckValue();" novalidate="novalidate">
									<input type="hidden" name="employee_type_id"  value="<?php echo $row['employee_type_id']; ?>">
                                    <div class="form-group">
										<label for="employee_type" class=" form-control-label">Employee Type</label>
										<input type="text" name="employee_type" oninput="CheckValue()" id="employee_type" value="<?php echo $row['employee_type']; ?>"class="form-control">
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
