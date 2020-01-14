<?php
    include 'connection/connect.php';
	session_start();
	include 'signin_checker.php' ;
	if(($_SESSION['Acess']==1)||($_SESSION['Acess']==2)){
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
		<script type = "text/javascript">
			google.charts.load('current', {packages: ['corechart']});
			function drawChart() {
				// Define the chart to be drawn.
				var data = google.visualization.arrayToDataTable([
				['Employee Name','Basic Salary','House Rent','Medical','Transport','Vat'],
				<?php
					$query4="SELECT employee_name,Basic_Salary,House_rent,Medical,Transport,vat FROM salary_info";
					$result4=mysqli_query($conn,$query4);
					while($row=mysqli_fetch_array($result4))
					{
						echo "['".$row["employee_name"]."',".$row["Basic_Salary"].",".$row["House_rent"].",".$row["Medical"].",".$row["Transport"].",".$row["vat"]."],";
					}
				?>
				]);

				var options = {
					height:450,
					isStacked:true
				};

				// Instantiate and draw the chart.
				var chart = new google.visualization.ColumnChart(document.getElementById('container'));
				chart.draw(data, options);
			}
			google.charts.setOnLoadCallback(drawChart);
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Percentage of Employee Salary </h4>
                                <div class="container" id="container" >

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
	}	/* }
		else{
		header('location:logout.php');
	} */
	?>											
