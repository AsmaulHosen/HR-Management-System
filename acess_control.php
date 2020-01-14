<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	if ($_SESSION['Acess']==1){
?>


<div class="content mt-3 container">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Access Control</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<table  class="table table-striped table-sm table-bordered text-center" >
								<thead>
    								<tr>
    									<th>No.</th>
    									<th>Description</th>
										<th>No.</th>
    									<th>Description</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>All Access</td>
										<td>2</td>
										<td>Maintain Accounts Information</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Maintain Attendance Information</td>
										<td>4</td>
										<td>Maintain All Informattion</td>
									</tr>
									<tr>
										<td>5</td>
										<td>Add & Edit Information</td>
										<td>6</td>
										<td>Read Information</td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</div> <!-- .card -->
				
			</div><!--/.col-->
		</div>
	</div><!-- .animated -->
</div><!-- .content -->

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						
						<div class="row">
							<div class="col-md-7">
								<strong class="card-title">All User Information</strong>
							</div>
							<div class="col-md-5">
								<input class="form-control" id="myInput" type="text" placeholder="Search..">
							</div>
						</div>
					</div>
					<div class="card-body">
						<table class="table table-striped table-bordered text-center" >
                            <thead>
								<tr>
									<th>No.</th>
									<th>User Name</th>
									<th>Email Address</th>
									<th>Employee Type</th>
									<th>Access No</th>
									<th>Change</th>
								</tr>
							</thead>
							<?php
                                $result = mysqli_query($conn,"SELECT * FROM user ORDER BY Acess ASC,Name ASC");
                                $counter = 0;
                                while($row = mysqli_fetch_array($result)) {
								?>
								<tbody id="myTable">
									<tr>
										<td><?php echo ++$counter ;?></td>
										<td><?php echo $row["Name"]; ?></td>
										<td><?php echo $row["Email"]; ?></td>
										<td><?php echo $row["Type"]; ?></td>
										<td><?php echo $row["Acess"]; ?></td>
										<td><a href="#edit<?php echo $row['User_ID']; ?>" data-toggle="modal" class="btn btn-sm btn-warning"><i class="fa fa-lock"></i>&nbsp; Change</a>
											<?php include('Edit_access_Cont.php'); ?>
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

	<?php include "includes/footer.php"; 
		} 
	
	?>
