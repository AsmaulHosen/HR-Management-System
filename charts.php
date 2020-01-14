<?php
    include 'connection/connect.php';
	session_start();
	include 'signin_checker.php' ;
	if(($_SESSION['Acess']==1)||($_SESSION['Acess']==6)){
	//if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']==TRUE && $_SESSION['Acess']==6) {
	//if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']==TRUE) {

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

		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			google.charts.load('current',{'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart(){
				var data = google.visualization.arrayToDataTable([
				['Gender','Number'],
				<?php
					$query="select employee_gender,count(*) as number from employee_info group by employee_gender";
					$result=mysqli_query($conn,$query);
					while($row=mysqli_fetch_array($result))
					{
						echo "['".$row["employee_gender"]."',".$row["number"]."],";
					}
				?>
				]);
				var options = {
					'legend':'left',
					'is3D':true,
					'width':400,
					'height':300
				};
				var chart = new google.visualization.PieChart(document.getElementById('piechart'));
				chart.draw(data,options);
			}
			setInterval(drawChart, 5000);
		</script>
		<script type="text/javascript">
			google.charts.load('current',{'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart1);
			function drawChart1(){
				var data = google.visualization.arrayToDataTable([
				['Type','Department'],
				<?php
					$query1="select employee_type,count(*) as number from employee_info group by employee_type";
					$result1=mysqli_query($conn,$query1);
					while($row=mysqli_fetch_array($result1))
					{
						echo "['".$row["employee_type"]."',".$row["number"]."],";
					}
				?>
				]);
				var options = {
					'legend':'left',
					'is3D':true,
					'width':400,
					'height':300
				};
				var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
				chart.draw(data,options);
			}
		</script>
		<script type="text/javascript">
			google.charts.load('current',{'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart2);
			function drawChart2(){
				var data = google.visualization.arrayToDataTable([
				['Type','Number'],
				<?php
					$query2="select employee_dept,count(*) as number from employee_info group by employee_dept";
					$result2=mysqli_query($conn,$query2);
					while($row=mysqli_fetch_array($result2))
					{
						echo "['".$row["employee_dept"]."',".$row["number"]."],";
					}
				?>
				]);
				var options = {
					'legend':'left',
					'is3D':true,
					'width':400,
					'height':300
				};
				var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
				chart.draw(data,options);
			}
		</script>
		<script type="text/javascript">
			google.charts.load('current',{'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart3);
			function drawChart3(){
				var data = google.visualization.arrayToDataTable([
				['Type','Designation'],
				<?php
					$query3="select employee_desgn,count(*) as number from employee_info group by employee_desgn";
					$result3=mysqli_query($conn,$query3);
					while($row=mysqli_fetch_array($result3))
					{
						echo "['".$row["employee_desgn"]."',".$row["number"]."],";
					}
				?>
				]);
				var options = {
					'legend':'left',
					'is3D':true,
					'width':400,
					'height':300

				};
				var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
				chart.draw(data,options);
			}
		</script>
	</head>
	<body>
		<?php
			include 'includes/left_panel.php';
			include 'includes/navbar.php' ;
			include 'connection/connect.php';
		?>

		<div class="content mt-3">
			<div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Percentage of Male & Female Employee</h4>
                                <div class="container" id="piechart">
								</div>
							</div>
						</div>
					</div><!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Percentage of Employee Type</h4>
                                <div class="container" id="piechart1">
								</div>
							</div>
						</div>
					</div><!-- /# column -->
				</div><!-- /# row -->
				<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Percentage of Department Type</h4>
                                <div class="container" id="piechart2">
								</div>
							</div>
						</div>
					</div><!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Percentage of Designation Type</h4>
                                <div class="container" id="piechart3">

								</div>
							</div>
						</div>
					</div><!-- /# column -->
				</div><!-- /# row -->
			</div><!-- .animated -->
		</div><!-- .content -->

	</div><!-- /#right-panel -->

	<!-- Right Panel -->
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
<?php
	}
	/* }
		else{
		header('location:logout.php');
	} */
	?>											
