<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	
    $result = mysqli_query($conn,"SELECT * FROM holiday_info WHERE holiday_info_id='" . $_GET['holiday_info_id'] . "'");
    $row= mysqli_fetch_array($result);
?>
<div class="content mt-3">
	<div class="animated fadeIn">
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Edit Employee Type</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">
                                <form action="save_edit_holiday_info.php" method="post" onsubmit="return CheckValue();" novalidate="novalidate">
                                    <input type="hidden" name="holiday_info_id"  value="<?php echo $row['holiday_info_id']; ?>">
                                    <div class="row">
                                        <div class="col-2">
                                            <label for="holiday_title" class=" form-control-label">Holiday Title </label>
										</div>
                                        <div class="col-4">
											<div class="form-group">
												<input type="text" name="holiday_title" value="<?php echo $row['holiday_title']; ?>" class="form-control">
												
											</div>
										</div>
                                        <div class="col-3">
											<div class="form-group">
												<input type="text" name="datefrom" id="from"  value="<?php echo $row['datefrom']; ?>" class="form-control">
											</div>
										</div>
										<div class="col-3">
											<div class="form-group">
												<input type="text" name="dateto"  id="to" value="<?php echo $row['dateto']; ?>" class="form-control">
											</div>
										</div>
									</div>
                                    <div>
										<button id="button" type="submit" class="btn btn-sm btn-info btn-block" name="save" value="submit"><i class="fa fa-edit"></i>&nbsp; Edit Employee Type</button>
										
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
<?php include "includes/footer.php";?>
