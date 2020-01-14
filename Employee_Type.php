<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==5)){
?>

<div class="content mt-3 container">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Employee Type</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">

								<form action="save_employee_type.php" method="post" onsubmit="return CheckValue();" novalidate="novalidate" id="employee_type_form">

                                    <div class="form-group">
										<label for="employee_type" class=" form-control-label">Employee Type *</label>
										<input type="text" name="employee_type" oninput="CheckValue()" id="employee_type" placeholder="Enter employee Type" class="form-control">
									</div>

									<div>
										<button id="button" type="submit" class="btn btn-sm btn-success btn-block" name="save" value="submit"><i class="fa fa-plus"></i>&nbsp; Add Employee Type</button>

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
			swal('Please Input Employee Type', '', 'warning');
			return false;
		}
	}
</script>
<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-7">
								<strong class="card-title">All Employee Type</strong>
							</div>
							<div class="col-md-5">
								<input class="form-control" id="myInput" type="text" placeholder="Search..">
							</div>
						</div>


					</div>
					<div class="card-body">
						<table  class="table table-striped table-bordered text-center" >
                            <thead>
								<tr>
									<th>No.</th>
									<th>Employee Type</th>
									<th colspan="2">Action </th>
								</tr>
							</thead>
							<?php
                                $result = mysqli_query($conn,"SELECT * FROM employee_type");
                                $counter = 0;
                                while($row = mysqli_fetch_array($result)) {
								?>
								<tbody id="myTable">
									<tr>
										<td width="5%"><?php echo ++$counter ;?></td>
										<td width="75%"><?php echo $row["employee_type"]; ?></td>
										<td width="10%">
											<a class="btn btn-sm btn-info" href="Edit_Employee_Type.php?employee_type_id=<?php echo $row["employee_type_id"]; ?>"><i class="fa fa-edit"></i>&nbsp; Edit</a>

										</td>
										<td width="10%">

											<a class="btn btn-sm btn-danger" href="Delete_Employee_Type.php?employee_type_id=<?php echo $row["employee_type_id"]; ?>"><i class="fa fa-scissors"></i>&nbsp; Delete</a>
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

</div><!-- /#right-panel -->

<!-- Right Panel -->



	<?php include "includes/footer.php";}?>
