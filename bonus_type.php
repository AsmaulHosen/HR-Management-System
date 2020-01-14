<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
?>


<div class="content mt-3 container">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Bonus Type</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">
								
								<form action="save_bonus_type.php" method="post" onsubmit="return CheckValue();" novalidate="novalidate" id="employee_type_form">
									
									<div class="row">
										<div class="col-2">
											<label for="bonus_type" class=" form-control-label">Bonus Type </label>
										</div>
										<div class="col-2">
											<input type="text" name="bonus_type" oninput="CheckValue()" id="bonus_type" placeholder="Enter Bonus Type" class="form-control">
										</div>
										<div class="col-1">
											<label for="bonus_per" class=" form-control-label">Bonus</label>
										</div>
										<div class="col-3">
											<select name="bonus_per" id="bonus_per" class="form-control">
												<option value="0">Select Percentage</option>
												<option value="1">1 %</option>
												<option value="2">2 %</option>
												<option value="3">3 %</option>
												<option value="4">4 %</option>
												<option value="5">5 %</option>
												<option value="6">6 %</option>
												<option value="7">7 %</option>
												<option value="8">8 %</option>
												<option value="9">9 %</option>
												<option value="10">10 %</option>
												<option value="11">11 %</option>
												<option value="12">12 %</option>
												<option value="13">13 %</option>
												<option value="14">14 %</option>
												<option value="15">15 %</option>
												<option value="16">16 %</option>
												<option value="17">17 %</option>
												<option value="18">18 %</option>
												<option value="19">19 %</option>
												<option value="20">20 %</option>
												<option value="21">21 %</option>
												<option value="23">22 %</option>
												<option value="23">23 %</option>
												<option value="24">24 %</option>
												<option value="25">25 %</option>
												<option value="26">26 %</option>
												<option value="27">27 %</option>
												<option value="28">28 %</option>
												<option value="29">29 %</option>
												<option value="30">30 %</option>
												<option value="31">31 %</option>
												<option value="32">32 %</option>
												<option value="33">33 %</option>
												<option value="34">34 %</option>
												<option value="35">35 %</option>
												<option value="36">36 %</option>
												<option value="37">37 %</option>
												<option value="38">38 %</option>
												<option value="39">39 %</option>
												<option value="40">40 %</option>
												<option value="41">41 %</option>
												<option value="42">42 %</option>
												<option value="43">43 %</option>
												<option value="44">44 %</option>
												<option value="45">45 %</option>
												<option value="46">46 %</option>
												<option value="47">47 %</option>
												<option value="48">48 %</option>
												<option value="49">49 %</option>
												<option value="50">50 %</option>
												
											</select>
										</div>
										<div class="col-1">
											<label for="bonus_mnt" class=" form-control-label">Month </label>
										</div>
										<div class="col-3">
											<select name="bonus_mnt" id="bonus_mnt" class="form-control">
												<option value="0">Select Month</option>
												<option value="January">January</option>
												<option value="February">February</option>
												<option value="March">March</option>
												<option value="April">April</option>
												<option value="May">May</option>
												<option value="June">June</option>
												<option value="July">July</option>
												<option value="August">August</option>
												<option value="September">September</option>
												<option value="October">October</option>
												<option value="November">November</option>
												<option value="December">December</option>
												
											</select>
										</div>
									</div>
									<br/>
                                    
									<div>
										<button id="button" type="submit" class="btn btn-sm btn-success btn-block" name="save" value="submit"><i class="fa fa-plus"></i>&nbsp; Add Bonus Type</button>
										
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
		var w = document.getElementById('bonus_type').value;
		if(!isNaN(w)){
			swal('Please enter only letter', '', 'warning');
			document.getElementById('bonus_type').value='';
		}
		
		if(w==""){
			swal('Please Input Bonus Type', '', 'warning');
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
								<strong class="card-title">All Bonus Type</strong>
							</div>
							<div class="col-md-5">
								<input class="form-control" id="myInput" type="text" placeholder="Search..">
							</div>
						</div>
						</div>
						<div class="card-body">
						<table id="bootstrap-data-table" class="table table-striped table-bordered text-center" >
						<thead>
						<tr>
						<th>No.</th>
						<th>Bonus Type</th>
						<th>Percentage of Basic Salary</th>
						<th>Month</th>
						<th colspan="2">Action </th>
						</tr>
						</thead>
						<?php
						$result = mysqli_query($conn,"SELECT * FROM bonus_type");
						$counter = 0;
						while($row = mysqli_fetch_array($result)) {
						?>
						<tbody id="myTable">
						<tr>
						<td><?php echo ++$counter ;?></td>
						<td><?php echo $row["bonus_type"]; ?></td>
						<td><?php echo $row["bonus_per"]; ?> %</td>
						<td><?php echo $row["bonus_mnt"]; ?></td>
						<td>
						<a class="btn btn-sm btn-info" href="Edit_bonus_Type.php?bonus_type_id=<?php echo $row["bonus_type_id"]; ?>"><i class="fa fa-edit"></i>&nbsp; Edit</a>
						
						</td>
						<td>
						<a class="btn btn-sm btn-danger" href="Delete_bonus_Type.php?bonus_type_id=<?php echo $row["bonus_type_id"]; ?>"><i class="fa fa-scissors"></i>&nbsp; Delete</a>
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
						
						
						<?php include "includes/footer.php";?>
												