<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	
    $result = mysqli_query($conn,"SELECT * FROM desgn_info WHERE desgn_id='" . $_GET['desgn_id'] . "'");
    $row= mysqli_fetch_array($result);
?>
<div class="content mt-3">
	<div class="animated fadeIn">
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Edit Designation Name</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">
								
								<form action="save_edit_desgn_info.php" method="post" onsubmit="return CheckValue();" novalidate="novalidate">
									<input type="hidden" name="desgn_id"  value="<?php echo $row['desgn_id']; ?>">
                                    <div class="form-group">
										<label for="desgn_name" class=" form-control-label">Designation Name *</label>
										<input type="text" name="desgn_name" oninput="CheckValue()" id="desgn_name" value="<?php echo $row['desgn_name']; ?>" class="form-control">
									</div>
									<div>
										<button id="button" type="submit" class="btn btn-sm btn-info btn-block" name="save" value="submit"><i class="fa fa-edit"></i>&nbsp; Edit Designation</button>
										
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
		var w = document.getElementById('desgn_name').value;
		if(!isNaN(w)){
			swal('Please enter only letter', '', 'warning');
			document.getElementById('desgn_name').value='';
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
