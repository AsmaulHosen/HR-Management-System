<!doctype html>
<?php
			session_start();
			include 'signin_checker.php' ;
			include 'includes/left_panel.php';
			include 'includes/navbar.php' ;
			include 'connection/connect.php';
		?>
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
		
		<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
		<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
		<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>
		
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
			$( function() {
				var dateFormat = "mm/dd/yy",
				from = $( "#from" )
				.datepicker({
					defaultDate: "+1w",
					changeMonth: true,
					numberOfMonths: 2
				})
				.on( "change", function() {
					to.datepicker( "option", "minDate", getDate( this ) );
				}),
				to = $( "#to" ).datepicker({
					defaultDate: "+1w",
					changeMonth: true,
					numberOfMonths: 2
				})
				.on( "change", function() {
					from.datepicker( "option", "maxDate", getDate( this ) );
				});
				
				function getDate( element ) {
					var date;
					try {
						date = $.datepicker.parseDate( dateFormat, element.value );
						} catch( error ) {
						date = null;
					}
					return date;
				}
			} );
		</script>
		<script>
			jQuery(function ($) {
				$("#excel").click(function () {
					// parse the HTML table element having an id=exportTable
					console.log('hhhhh')
					var dataSource = shield.DataSource.create({
						data: "#exportTable",
						schema: {
							type: "table",
							fields: {
								Serial_No: { type: String },
								Employee_ID: { type: String },
								Employee_Name: { type: String },
								Date: { type: String },
								In_Time: { type: String },
								Out_Time: { type: String }
							}
						}
					});
					// when parsing is done, export the data to Excel
					dataSource.read().then(function (data) {
						new shield.exp.OOXMLWorkbook({
							author: "PrepBootstrap",
							worksheets: [
							{
								name: "PrepBootstrap Table",
								rows: [
								{
									cells: [
									{
										style: {
											bold: true
										},
										type: String,
										value: "Serial No"
									},
									{
										style: {
											bold: true
										},
										type: String,
										value: "Employee ID"
									},
									{
										style: {
											bold: true
										},
										type: String,
										value: "Employee Name"
									},
									{
										style: {
											bold: true
										},
										type: String,
										value: "Date"
									},
									{
										style: {
											bold: true
										},
										type: String,
										value: "In Time"
									},
									{
										style: {
											bold: true
										},
										type: String,
										value: "Out Time"
									}
									]
								}
								].concat($.map(data, function(item) {
									return {
										cells: [
										{ type: String, value: item.Serial_No },
										{ type: String, value: item.Employee_ID },
										{ type: String, value: item.Employee_Name },
										{ type: String, value: item.Date },
										{ type: String, value: item.In_Time },
										{ type: String, value: item.Out_Time }
										]
									};
								}))
							}
							]
							}).saveAs({
							fileName: "Attendance"
						});
					});
				});
			});
			jQuery(function ($) {
				$("#pdf").click(function () {
					d = Date.now();
					d = new Date(d);
					d = d.getDate()+'-'+(d.getMonth()+1)+'-'+d.getFullYear();
					
					// parse the HTML table element having an id=exportTable
					var dataSource = shield.DataSource.create({
						data: "#exportTable",
						schema: {
							type: "table",
							fields: {
								Serial_No: { type: String },
								Employee_ID: { type: String },
								Employee_Name: { type: String },
								Date: { type: String },
								In_Time: { type: String },
								Out_Time: { type: String }
							}
						}
					});
					
					// when parsing is done, export the data to PDF
					dataSource.read().then(function (data) {
						var pdf = new shield.exp.PDFDocument({
							author: "PrepBootstrap",
							created: new Date()
						});
						
						pdf.addPage("a4", "portrait");
						
						pdf.table(
						50,
						50,
						data,
						[
                        { field: "Serial_No", title: "Serial_No", width: 65 },
                        { field: "Employee_ID", title: "Employee_ID", width: 85 },
                        { field: "Employee_Name", title: "Employee_Name", width: 100 },
                        { field: "Date", title: "Date", width: 85 },
                        { field: "In_Time", title: "In_Time", width: 60 },
                        { field: "Out_Time", title: "Out_Time", width: 60 }
						],
						{
							margins: {
								top: 50,
								left: 50
							}
						}
						);
						pdf.saveAs({
							fileName: d+'_'+'Attendance'
						});
					});
				});
			});
			
		</script>
		
		
		
		
	</head>
	<body>
		
		
		<div class="content mt-3 container">
			<div class="animated fadeIn">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<strong class="card-title">Imported Attendance Information</strong>
							</div>
							<div class="card-body">
								<!-- Credit Card -->
								<div id="pay-invoice">
									<div class="card-body">
										
										<form method="post" onsubmit="return CheckValue();" novalidate="novalidate" id="employee_type_form">
											
											<div class="row">
												<div class="col-2">
													<label for="employee_ref" class=" form-control-label">Employee </label>
												</div>
												<div class="col-4">
													<div class="form-group">
														<select name="employee_name" id="employee_name" class="form-control">
															<option value="0">Please select</option>
															<option value="all">All Employee</option>
															<?php
																$query= mysqli_query($conn,"select * from employee_info");
																while ($row=mysqli_fetch_assoc($query)){
																	$employee_name=$row['employee_name'];
																	$employee_name=$row['employee_name'];
																	
																?>
																<option  value="<?php echo $row['employee_name'];?>"><?php echo $row['employee_name'];?></option>
															<?php } ?>
															?>
														</select>
													</div>
												</div>
												<div class="col-3">
													<div class="form-group">
														<input type="text"  id="from" name="from"   placeholder="From Date" class="form-control">
													</div>
												</div>
												<div class="col-3">
													<div class="form-group">
														<input type="text" id="to" name="to" placeholder="To Date" class="form-control">
													</div>
												</div>
											</div>
											<div>
												<button id="button" type="submit" class="btn btn-sm btn-primary btn-block" name="submit" value="submit"><i class="fa fa-search"></i>&nbsp; Search Information</button>
												
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
				
			}
		</script>
		<div class="content mt-3">
			<div class="animated fadeIn">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								
								<div class="row">
									<div class="col-md-3">
										<strong class="card-title">All Attendance File</strong>
									</div>
									<div class="col-md-6">
										<input class="form-control" id="myInput" type="text" placeholder="Search..">
									</div>
									<div class="col-md-1">
										<button id="pdf"  class="btn btn-md btn-primary"><i class="fa fa fa-file-pdf-o"></i>&nbsp; PDF</button>
									</div>
									<div class="col-md-2">
										<button id="excel"  class="btn btn-md btn-primary float-right"><i class="fa fa fa-file-excel-o"></i>&nbsp; Excel</button>
									</div>
								</div>
								
								
							</div>
							<div class="card-body">
								<table id="exportTable" class="table table-striped table-bordered" text-align="center">
									<thead>
										<tr>
											<th>Serial_No</th>
											<th>Employee_ID</th>
											<th>Employee_Name</th>
											<th>Date</th>
											<th>In_Time</th>
											<th>Out_Time</th>
											
											
										</tr>
									</thead>
									<?php
										if (isset($_POST['submit'])){
											$employee_name=$_POST['employee_name'];
											$from=$_POST['from'];
											$fromdate = date('Y-m-d', strtotime($from));
											$to=$_POST['to'];
											$todate = date('Y-m-d', strtotime($to));
											
											if ($employee_name == "all") {
												$result = mysqli_query($conn,"SELECT * FROM attendance_info where a_date between '$fromdate' and  '$todate'");
												//echo "all";exit;
												
												}else{
												$result = mysqli_query($conn,"SELECT * FROM attendance_info where employee_name='$employee_name' And a_date between '$fromdate' and  '$todate'");
												//echo "11";exit;
											}
											$counter = 0;
											while($row = mysqli_fetch_array($result)) {
												
											?>
											<tbody id="myTable">
												<tr>
													<td><?php echo ++$counter ;?></td>
													<td><?php echo $row["employee_id"]; ?></td>
													<td><?php echo $row["employee_name"]; ?></td>
													<td><?php echo $row["a_date"]; ?></td>
													<td><?php echo $row["on_duty"]; ?></td>
													<td><?php echo $row["off_duty"]; ?></td>
													
												</tr>
												<tbody>
													<?php
													}
													
												}
											?>
											
										</table>
									</div>
									
								</div>
							</div>
							
							
						</div>
					</div><!-- .animated -->
				</div><!-- .content -->
				
			</div><!-- /#right-panel -->
			
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
			
		</body>
	</html>
