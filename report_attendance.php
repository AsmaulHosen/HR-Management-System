<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Sufee Admin - HTML5 Admin Template">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="apple-touch-icon" href="apple-icon.png">
		<link rel="shortcut icon" href="favicon.ico">
		
		<link rel="stylesheet" href="assets/css/normalize.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/themify-icons.css">
		<link rel="stylesheet" href="assets/css/flag-icon.min.css">
		<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
		<!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
		<link rel="stylesheet" href="assets/scss/style.css">
		<link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">     
			function PrintDiv() {    
				var divToPrint = document.getElementById('divToPrint');
				var popupWin = window.open('', '_blank', 'width=300,height=300');
				popupWin.document.open();
				popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
				popupWin.document.close();
			}
		</script>
	</head>
	<body>
		<?php
			session_start();
			include 'signin_checker.php' ;
			include 'includes/left_panel.php';
			include 'includes/navbar.php' ;
			include 'connection/connect.php';
			if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)){ 
			?>	
			<div class="content mt-3 container">
				<div class="animated fadeIn">
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<strong class="card-title">Employee Attendance Report</strong>
								</div>
								<div class="card-body">
									<form method="post" onsubmit="return CheckValue();" novalidate="novalidate" >						
										<div class="row">
											<div class="col-3">
												<label for="month" class=" form-control-label">Pick a Month </label>
											</div>
											<div class="col-5">
												<div class="form-group">
													<select name="auto_assign" id="auto_assign" class="form-control">
														<option value="0">Please Select Month</option>
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
											<div class="col-4">
											<button id="button" type="submit" class="btn btn-md btn-primary btn-block" name="submit" value="print" onclick="PrintDiv();><i class="fa fa-search"></i>&nbsp; Search Information</button>
										</div>
										
									</div>
								</form>
							</div>
						</div> <!-- .card -->
						
					</div><!--/.col-->
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">							
								<div class="row">
									<strong class="card-title col-md-3">Employee Attendance</strong>
									<input class="form-control col-md-2 " id="myInput" type="text" placeholder="Search..">
									<p class="col-md-2 text-center">Absent-Ab </p>
									<p class="col-md-2 text-center">Present-P  </p>
									<p class="col-md-2 text-center">Weekend-W  </p>									
									<button class="btn btn-md btn-dark col-md-1" value="print" onclick="PrintDiv();" ><i class="fa fa-print"></i></button>																		
								</div>								
							</div>
						</div>
						<div class="card-body " id="divToPrint" >
							<?php
								if (isset($_POST['submit'])){
									$auto_assign=$_POST['auto_assign'];	
									
								?>
								<h5>Month : <?php echo $auto_assign; ?></h5>
								<br/>
								
								<table  class="table table-sm table-bordered table-responsive">
									
									<thead>
										<tr>										
											
											<th>Name</th>
											
											<?php 
												$rs = mysqli_query($conn,"SELECT a_date FROM attendance_info 
												WHERE auto_assign='$auto_assign' GROUP BY a_date");												
												while($row = mysqli_fetch_array($rs)) {
												$d = $row["a_date"];													
												?>
												<th><?php if(isset($d))echo date('d', strtotime($d)); ?></th>
												<?php
													}													
												?>											
											</tr>
										</thead>
										<tbody id="myTable">
											<?php
												$result = mysqli_query($conn,"SELECT employee_id,employee_name,auto_assign,a_date,on_duty,off_duty,weekend
												FROM attendance_info
												WHERE auto_assign='$auto_assign'
												Group By employee_name");									
												while($row = mysqli_fetch_array($result)) {
													$name = $row["employee_name"];
													$month = $row["auto_assign"];
												?>											
												<tr>													
													<td><?php echo $row["employee_name"]; ?></td>
													
													<?php
														$result2 = mysqli_query($conn,"SELECT a_date,on_duty,weekend
														FROM attendance_info
														WHERE employee_name='".$name."'
														AND auto_assign='".$month."'");
														
														while($row = mysqli_fetch_array($result2)) {
															$date = $row["a_date"];
															
															if($row["on_duty"]==""){
																if($row["weekend"]==""){
																	$attendance = "style='background-color: Red;color:white' >Ab";
																	}else{
																	$attendance = "style='background-color: Green;color:white' >W";
																}																
																}else{
																$attendance = " >P";
															}
														?>
														<td <?php if(isset($attendance))echo $attendance; ?></td>
															<?php
															}															
														?>
														
													</tr>
													<?php
													}
												?>
												
											</tbody>
										</table>
										<?php
										}
									?>
								</div>
								
							</div> <!-- .card -->
							
						</div><!--/.col-->
					</div>
				</div><!-- .animated -->
			</div><!-- .content -->
			
			<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
			<script src="assets/js/popper.min.js"></script>
			<script src="assets/js/plugins.js"></script>
			<script src="assets/js/main.js"></script>
			
			<script>
				$(document).ready(function(){
					$("#myInput").on("keyup", function() {
						var value = $(this).val().toLowerCase();
						$("#myTable tr").filter(function() {
						$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
						});
						});
						</script>
						<?php } ?>
						</body>
						</html>
												