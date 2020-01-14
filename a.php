<?php
    include 'connection/connect.php';
    $query="select employee_gender,count(*) as number from employee_info group by employee_gender";
    $result=mysqli_query($conn,$query);
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			google.charts.load('current',{'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart(){
				var data = google.visualization.arrayToDataTable([
				['Gender','Number'],
				<?php
					while($row=mysqli_fetch_array($result))
					{
						echo "['".$row["employee_gender"]."',".$row["number"]."],";
					}
				?>
				]);
				var options = {
					title:'Percentage of Male & Female Employee'
				};
				var chart = new google.visualization.PieChart(document.getElementById('piechart'));
				chart.draw(data,options);
			}
		</script>
	</head>
	<body>
		
		<div id="piechart" style="width:900px;height:500px;"></div>
		
		<div class="col-md-6">											
			<table class="table">
				<thead>
					// <tr>
						// <th scope="col"><i class="fa fa-user"></i>&nbsp; Name</th>
						// <th scope="col"><input type="text" name="employee_name" id="employee_name" value="<?php echo $row['employee_name']; ?>"class="form-control"></th>
					// </tr>
				</thead>
				<tbody>
					
					<tr>
						// <td><i class="fa fa-unsorted (alias)"></i>&nbsp; Type</td>
						// <td><input type="text" name="employee_type" id="employee_type" value="<?php echo $row['employee_type']; ?>"class="form-control" disabled></td>
					</tr>
					<tr>
						//<td><i class="fa fa-male fa-female"></i>&nbsp; Gender</td>
						//<td><input type="text" name="employee_gender" id="employee_gender" value="<?php echo $row['employee_gender']; ?>"class="form-control"></td>
					</tr>
					<tr>
						//<td><i class="fa fa-calendar-o"></i>&nbsp; Date Of Birth</td>
						//<td><input type="text" name="employee_dob" id="employee_dob" value="<?php echo $row['employee_dob']; ?>"class="form-control"></td>
					</tr>
					<tr>
						//<td><i class="fa fa-calendar"></i>&nbsp; Joing Date</td>
						//<td><input type="text" name="employee_joindate" id="employee_joindate" value="<?php echo $row['employee_joindate']; ?>"class="form-control" disabled></td>
					</tr>
					<tr>
						//<td><i class="fa fa-mobile-phone (alias)"></i>&nbsp; Phone Number</td>
						//<td><input type="text" name="employee_contNum" id="employee_contNum" value="<?php echo $row['employee_contNum']; ?>"class="form-control"></td>
					</tr>
					<tr>
						//<td><i class="fa fa-ambulance"></i>&nbsp; Emergency Number</td>
						//<td><input type="text" name="employee_emg_contNum" id="employee_emg_contNum" value="<?php echo $row['employee_emg_contNum']; ?>"class="form-control"></td>
					</tr>
					<tr>
						//<td><i class="fa fa-envelope"></i>&nbsp; Email Address</td>
						//<td><input type="text" name="employee_email" id="employee_email" value="<?php echo $row['employee_email']; ?>"class="form-control" disabled></td>
					</tr>
					<tr>
						//<td><i class="fa fa-users"></i>&nbsp; Reference</td>
						//<td><input type="text" name="employee_ref" id="employee_ref" value="<?php echo $row['employee_ref']; ?>"class="form-control" disabled></td>
					</tr>
					<tr>
						//<td><i class="fa fa-user"></i>&nbsp; Marital Status</td>
						//<td><input type="text" name="employee_marital_status" id="employee_marital_status" value="<?php echo $row['employee_marital_status']; ?>"class="form-control"></td>
					</tr>
					<tr>
						//<td><i class="fa fa-credit-card"></i>&nbsp; NID Number</td>
						//<td><input type="text" name="employee_nid" id="employee_nid" value="<?php echo $row['employee_nid']; ?>"class="form-control"></td>
					</tr>
					<tr>
						//<td><i class="fa fa-plane"></i>&nbsp; Passport ID</td>
						//<td><input type="text" name="employee_passportid" id="employee_passportid" value="<?php echo $row['employee_passportid']; ?>"class="form-control"></td>
					</tr>
					<tr>
						//<td><i class="fa fa-male"></i>&nbsp; Father Name</td>
						//<td><input type="text" name="father_number" id="father_name" value="<?php echo $row['father_name']; ?>"class="form-control"></td>
					</tr>
					<tr>
						//<td><i class="fa fa-female"></i>&nbsp; Mother Name</td>
						//<td><input type="text" name="mother_number" id="mother_name" value="<?php echo $row['mother_name']; ?>"class="form-control"></td>
					</tr>
					<tr>
						//<td><i class="fa fa-home"></i>&nbsp; Present Address</td>
						//<td><input type="text" name="present_address" id="present_address" value="<?php echo $row['present_address']; ?>"class="form-control"></td>
					</tr>
					<tr>
						//<td><i class="fa fa-home"></i>&nbsp; Permanent Address</td>
						//<td><input type="text" name="permanent_address" id="permanent_address" value="<?php echo $row['permanent_address']; ?>"class="form-control"></td>
					</tr>
					
				</tbody>
				
			</table>
		</div>
	</body>
</html>
