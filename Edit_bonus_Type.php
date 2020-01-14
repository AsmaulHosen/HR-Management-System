<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	
    $result = mysqli_query($conn,"SELECT * FROM bonus_type WHERE bonus_type_id='" . $_GET['bonus_type_id'] . "'");
    $row= mysqli_fetch_array($result);
?>
<div class="content mt-3">
	<div class="animated fadeIn">
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Edit Bonus Type</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">
								
								<form action="save_edit_bonus_type.php" method="post" onsubmit="return CheckValue();" novalidate="novalidate">
									<input type="hidden" name="bonus_type_id"  value="<?php echo $row['bonus_type_id']; ?>">
									<div class="row">
										<div class="col-2">
											<label for="bonus_type" class=" form-control-label">Bonus Type </label>
										</div>
										<div class="col-2">
											<input type="text" name="bonus_type" oninput="CheckValue()" id="bonus_type" value="<?php echo $row['bonus_type']; ?>"class="form-control">
										</div>
										<div class="col-1">
											<label for="bonus_per" class=" form-control-label">Bonus</label>
										</div>
										<div class="col-3">
											<select name="bonus_per" id="bonus_per" class="form-control">
												<option value="1" <?php if ($row['bonus_per']=='1'){echo "selected";}?>>1 %</option>
												<option value="2" <?php if ($row['bonus_per']=='2'){echo "selected";}?>>2 %</option>
												<option value="3" <?php if ($row['bonus_per']=='3'){echo "selected";}?>>3 %</option>
												<option value="4" <?php if ($row['bonus_per']=='4'){echo "selected";}?>>4 %</option>
												<option value="5" <?php if ($row['bonus_per']=='5'){echo "selected";}?>>5 %</option>
												<option value="6" <?php if ($row['bonus_per']=='6'){echo "selected";}?>>6 %</option>
												<option value="7" <?php if ($row['bonus_per']=='7'){echo "selected";}?>>7 %</option>
												<option value="8" <?php if ($row['bonus_per']=='8'){echo "selected";}?>>8 %</option>
												<option value="9" <?php if ($row['bonus_per']=='9'){echo "selected";}?>>9 %</option>
												<option value="10" <?php if ($row['bonus_per']=='10'){echo "selected";}?>>10 %</option>
												<option value="11" <?php if ($row['bonus_per']=='11'){echo "selected";}?>>11 %</option>
												<option value="12" <?php if ($row['bonus_per']=='12'){echo "selected";}?>>12 %</option>
												<option value="13" <?php if ($row['bonus_per']=='13'){echo "selected";}?>>13 %</option>
												<option value="14" <?php if ($row['bonus_per']=='14'){echo "selected";}?>>14 %</option>
												<option value="15" <?php if ($row['bonus_per']=='15'){echo "selected";}?>>15 %</option>
												<option value="16" <?php if ($row['bonus_per']=='16'){echo "selected";}?>>16 %</option>
												<option value="17" <?php if ($row['bonus_per']=='17'){echo "selected";}?>>17 %</option>
												<option value="18" <?php if ($row['bonus_per']=='18'){echo "selected";}?>>18 %</option>
												<option value="19" <?php if ($row['bonus_per']=='19'){echo "selected";}?>>19 %</option>
												<option value="20" <?php if ($row['bonus_per']=='20'){echo "selected";}?>>20 %</option>
												<option value="21" <?php if ($row['bonus_per']=='21'){echo "selected";}?>>21 %</option>
												<option value="23" <?php if ($row['bonus_per']=='22'){echo "selected";}?>>22 %</option>
												<option value="23" <?php if ($row['bonus_per']=='23'){echo "selected";}?>>23 %</option>
												<option value="24" <?php if ($row['bonus_per']=='24'){echo "selected";}?>>24 %</option>
												<option value="25" <?php if ($row['bonus_per']=='25'){echo "selected";}?>>25 %</option>
												<option value="26" <?php if ($row['bonus_per']=='26'){echo "selected";}?>>26 %</option>
												<option value="27" <?php if ($row['bonus_per']=='27'){echo "selected";}?>>27 %</option>
												<option value="28" <?php if ($row['bonus_per']=='28'){echo "selected";}?>>28 %</option>
												<option value="29" <?php if ($row['bonus_per']=='29'){echo "selected";}?>>29 %</option>
												<option value="30" <?php if ($row['bonus_per']=='30'){echo "selected";}?>>30 %</option>
												<option value="31" <?php if ($row['bonus_per']=='31'){echo "selected";}?>>31 %</option>
												<option value="32" <?php if ($row['bonus_per']=='32'){echo "selected";}?>>32 %</option>
												<option value="33" <?php if ($row['bonus_per']=='33'){echo "selected";}?>>33 %</option>
												<option value="34" <?php if ($row['bonus_per']=='34'){echo "selected";}?>>34 %</option>
												<option value="35" <?php if ($row['bonus_per']=='35'){echo "selected";}?>>35 %</option>
												<option value="36" <?php if ($row['bonus_per']=='36'){echo "selected";}?>>36 %</option>
												<option value="37" <?php if ($row['bonus_per']=='37'){echo "selected";}?>>37 %</option>
												<option value="38" <?php if ($row['bonus_per']=='38'){echo "selected";}?>>38 %</option>
												<option value="39" <?php if ($row['bonus_per']=='39'){echo "selected";}?>>39 %</option>
												<option value="40" <?php if ($row['bonus_per']=='40'){echo "selected";}?>>40 %</option>
												<option value="41" <?php if ($row['bonus_per']=='41'){echo "selected";}?>>41 %</option>
												<option value="42" <?php if ($row['bonus_per']=='42'){echo "selected";}?>>42 %</option>
												<option value="43" <?php if ($row['bonus_per']=='43'){echo "selected";}?>>43 %</option>
												<option value="44" <?php if ($row['bonus_per']=='44'){echo "selected";}?>>44 %</option>
												<option value="45" <?php if ($row['bonus_per']=='45'){echo "selected";}?>>45 %</option>
												<option value="46" <?php if ($row['bonus_per']=='46'){echo "selected";}?>>46 %</option>
												<option value="47" <?php if ($row['bonus_per']=='47'){echo "selected";}?>>47 %</option>
												<option value="48" <?php if ($row['bonus_per']=='48'){echo "selected";}?>>48 %</option>
												<option value="49" <?php if ($row['bonus_per']=='49'){echo "selected";}?>>49 %</option>
												<option value="50" <?php if ($row['bonus_per']=='50'){echo "selected";}?>>50 %</option>
												
											</select>
										</div>
										<div class="col-1">
											<label for="bonus_mnt" class=" form-control-label">Month </label>
										</div>
										<div class="col-3">
											<select name="bonus_mnt" id="bonus_mnt" class="form-control">										
												<option value="January" <?php if ($row['bonus_mnt']=='January'){echo "selected";}?>>January</option>
												<option value="February" <?php if ($row['bonus_mnt']=='February'){echo "selected";}?>>February</option>
												<option value="March" <?php if ($row['bonus_mnt']=='March'){echo "selected";}?>>March</option>
												<option value="April" <?php if ($row['bonus_mnt']=='April'){echo "selected";}?>>April</option>
												<option value="May" <?php if ($row['bonus_mnt']=='May'){echo "selected";}?>>May</option>
												<option value="June" <?php if ($row['bonus_mnt']=='June'){echo "selected";}?>>June</option>
												<option value="July" <?php if ($row['bonus_mnt']=='July'){echo "selected";}?>>July</option>
												<option value="August" <?php if ($row['bonus_mnt']=='August'){echo "selected";}?>>August</option>
												<option value="September" <?php if ($row['bonus_mnt']=='September'){echo "selected";}?>>September</option>
												<option value="October" <?php if ($row['bonus_mnt']=='October'){echo "selected";}?>>October</option>
												<option value="November" <?php if ($row['bonus_mnt']=='November'){echo "selected";}?>>November</option>
												<option value="December"<?php if ($row['bonus_mnt']=='December'){echo "selected";}?>>December</option>
											</select>
										</div>
									</div>
									<br/>
                                    
									
									<div>
										<button id="button" type="submit" class="btn btn-sm btn-info btn-block" name="save" value="submit"><i class="fa fa-edit"></i>&nbsp; Edit Bonus Type</button>
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
			swal('Please Input something', '', 'warning');
			return false;
		}
	}
</script>
</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include "includes/footer.php";?>
