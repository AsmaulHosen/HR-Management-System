<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==3)){
?>
<div class="content mt-3 container">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Holiday Information</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">
                                <form action="save_holiday_info.php" method="post" novalidate="novalidate" id="bonus_form">
                                    <div class="row">
                                        <div class="col-2">
                                            <label for="holiday_title" class=" form-control-label">Holiday Title </label>
										</div>
                                        <div class="col-4">
											<div class="form-group">
												<input type="text" name="holiday_title"  id="holiday_title" placeholder="Enter Holiday Title" class="form-control">
												
											</div>
										</div>
                                        <div class="col-3">
											<div class="form-group">
												<input type="text" name="datefrom" id="from"  placeholder="From Date" class="form-control">
											</div>
										</div>
										<div class="col-3">
											<div class="form-group">
												<input type="text" name="dateto"  id="to" placeholder="To Date" class="form-control">
											</div>
										</div>
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
<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						
						<div class="row">
							<div class="col-md-7">
								<strong class="card-title">Holiday Information</strong>
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
									<th>Holiday Title</th>
									<th>Form Date</th>
									<th>To Date</th>
									<th>No of Days</th>
									<th colspan="2">Action </th>
								</tr>
							</thead>
							<?php
                                $result = mysqli_query($conn,"SELECT * FROM holiday_info");
                                $counter = 0;
								
                                while($row = mysqli_fetch_array($result)) {
								?>
								<tbody id="myTable">
									<tr>
										<td width="5%"><?php echo ++$counter ;?></td>
										<td width="30%"><?php echo $row["holiday_title"]; ?></td>
										<td width="15%"><?php echo $row["datefrom"]; ?></td>
										<td width="15%"><?php echo $row["dateto"]; ?></td>
										<td width="15%"><?php echo floor((abs(strtotime( $row["datefrom"]) - strtotime( $row["dateto"])))/(60*60*24)); ?> Days</td>
										<td width="10%">
											<a class="btn btn-sm btn-info" href="Edit_holiday_info.php?holiday_info_id=<?php echo $row["holiday_info_id"]; ?>"><i class="fa fa-edit"></i>&nbsp; Edit</a>
											
										</td>
										<td width="10%">
											
											<a class="btn btn-sm btn-danger" href="Delete_holiday_info.php?holiday_info_id=<?php echo $row["holiday_info_id"]; ?>"><i class="fa fa-scissors"></i>&nbsp; Delete</a>
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
<script>
    $( function() {
        var dateFormat = "mm/dd/yy",
		from = $( "#from" )
		.datepicker({
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 1
		})
		.on( "change", function() {
			to.datepicker( "option", "minDate", getDate( this ) );
		}),
		to = $( "#to" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 1
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


<!-- Right Panel -->
	<?php include "includes/footer.php";}?>
