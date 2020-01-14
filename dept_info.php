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
						<strong class="card-title">Types of Department </strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">

								<form action="save_dept_info.php" method="post" onsubmit="return CheckValue();" novalidate="novalidate" >

                                    <div class="form-group">
										<label for="dept_name" class=" form-control-label">Department Name *</label>
										<input type="text" name="dept_name" oninput="CheckValue()" id="dept_name" placeholder="Enter Department Name" class="form-control">
									</div>

									<div>
										<button id="button" type="submit" class="btn btn-sm btn-success btn-block" name="save" value="submit"><i class="fa fa-plus"></i>&nbsp; Add Department</button>

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
			swal('Please Input Department Name', '', 'warning');
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
								<strong class="card-title">All Department Name</strong>
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
									<th>Department Name</th>
									<th colspan="2">Action </th>
								</tr>
							</thead>
							<?php
                                $result = mysqli_query($conn,"SELECT * FROM dept_info");
                                $counter = 0;
                                while($row = mysqli_fetch_array($result)) {
								?>
								<tbody id="myTable">
									<tr>
										<td width="5%"><?php echo ++$counter ;?></td>
										<td width="75%"><?php echo $row["dept_name"]; ?></td>
										<td width="10%">
											<a class="btn btn-sm btn-info" href="Edit_Dept_Info.php?dept_id=<?php echo $row["dept_id"]; ?>"><i class="fa fa-edit"></i>&nbsp; Edit</a>
										</td>
										<td width="10%">
											<a class="btn btn-sm btn-danger" href="Delete_Dept_Info.php?dept_id=<?php echo $row["dept_id"]; ?>"><i class="fa fa-scissors"></i>&nbsp; Delete</a>
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
