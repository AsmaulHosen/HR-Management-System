<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
	if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==3)){

?>
<header>
	<script>
		function MySucessFn(){
			swal({
				title: "File Upload Sucessfully!",
				text: "",
				type: "success",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/attendance.php';
			});
		}
		function valid(){
		if( document.getElementById("file_input").files.length == 0 ){
			swal('Please upload excel file !', '', 'warning')
			return false;
		}
		}
		function checkFile(sender){
			var ff = document.getElementById("inputFile");
			var validExtension = ".xlsx";
			var fileExtension = sender.value;
			fileExtension = fileExtension.substring(fileExtension.lastIndexOf('.'));
			if (fileExtension != validExtension) {
				swal({
					title: "Invalid File! Valid File is Only " + validExtension + " Type." ,
					text: "",
					type: "warning",
					timer: 2000,
					showConfirmButton: false,
				},
                window.load = function(){
					window.location='http://localhost/project/attendance.php';
				});
				ff.innerHTML = "";
				//alert("Invalid File. Valid File is Only " + validExtension + " Type.");
				return false;
			}
			else{

				return true;
			}
		}
	</script>

</header>
<?php
    include 'includes/left_panel.php';
    include 'includes/navbar.php' ;
    include 'connection/connect.php';
	//if(isset($_POST['save'])){
	//$fn = $_REQUEST['file_input'];
	//    $fileName = "";
	////$target_dir = $_SERVER['DOCUMENT_ROOT'].'/Project/phpSpreadsheet/samples/Reader/sampleData/';
	//$target_dir = 'phpSpreadsheet/samples/Reader/sampleData/';
	//$target_file = $target_dir . basename($_FILES["file_input"]["name"]);
	//$uploadOk = 1;
	//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	//// Check if image file is a actual image or fake image
	//if(isset($_POST["save"])) {
	//
	//    $check = getimagesize($_FILES[$fn]["tmp_name"]);
	//    if($check !== false) {
	//        echo "File is an image - " . $check["mime"] . ".";
	//        $uploadOk = 1;
	//    } else {
	//        echo "File is not an image.";
	//        $uploadOk = 0;
	//    }
	//}
	//// Check if file already exists
	//if (file_exists($target_file)) {
	//    echo "Sorry, file already exists.";
	//    $uploadOk = 0;
	//}
	//// Check file size
	//if ($_FILES[$fn]["size"] > 50000000000) {
	//    echo "Sorry, your file is too large.";
	//    $uploadOk = 0;
	//}
	//// Allow certain file formats
	//if($imageFileType != "xlsx") {
	//    echo "Sorry, only xlsx files are allowed.";
	//    $uploadOk = 0;
	//}
	//// Check if $uploadOk is set to 0 by an error
	//if ($uploadOk == 0) {
	//    echo "Sorry, your file was not uploaded.";
	//// if everything is ok, try to upload file
	//} else {
	//    if (move_uploaded_file($_FILES[$fn]["tmp_name"], $target_file)) {
	//        echo "The file ". basename( $_FILES[$fn]["name"]). " has been uploaded.";
	//        $fileName = $fileNmae . basename( $_FILES[$fn]["name"]);
	//    } else {
	//        echo "Sorry, there was an error uploading your file.";
	//    }
	//}
	//}
	if(isset($_POST['save'])){
		$file_name = $_FILES['file_input']['name'];
		$file_type = $_FILES['file_input']['type'];
		$file_size = $_FILES['file_input']['size'];
		$file_temp_loc = $_FILES['file_input']['tmp_name'];
		$file_store = 'phpSpreadsheet/samples/Reader/sampleData/'. $file_name;
		move_uploaded_file($file_temp_loc,$file_store);
		//$_SESSION['fileName'] = $file_name;
		$upload_date = date("Y-m-d");
		$sql = "INSERT INTO `attendance_file`(`attendance_file_name`,`upload_date`)VALUES('".$file_name."','".$upload_date."')";
		if($conn->query($sql)==true){
			echo "<script type= 'text/javascript'>MySucessFn();
			</script>";
			echo '<script>window.location.href = "phpSpreadsheet/samples/Reader/exceltodb.php?n='. $file_name. '";</script>';


		}

		//header('location: phpSpreadsheet/samples/Reader/exceltodb.php');
	}

?>


<div class="content mt-3 container">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Attendance Information</strong>
					</div>
					<div class="card-body">
						<!-- Credit Card -->
						<div id="pay-invoice">
							<div class="card-body">
								<!--phpSpreadsheet/samples/Reader/exceltodb.php-->
                <div class="row form-group">
                    <div class="col col-md-12 text-center"><label style="color:red; font-weight: bold;" class=" form-control-label text-center">Only Excel(xlsx) File Accepted</label></div>
                </div>
								<form action="" method="post" onsubmit="return valid()" enctype="multipart/form-data">

                                    <div class="row form-group">
                                        <div class="col col-md-3 "><label for="file-input" class=" form-control-label ">File Upload (xlsx)</label></div>
                                        <div class="col-12 col-md-9" id="inputFile"><input type="file" id="file_input" onchange="checkFile(this);" accept=".xlsx" name="file_input" class="form-control-file"></div>
									</div>

									<div>
										<button id="button" type="submit" class="btn btn-sm btn-success btn-block" name="save" value="submit"><i class="fa fa-upload"></i>&nbsp; Upload File (Excel)</button>

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
							<div class="col-md-7">
								<strong class="card-title">All Attendance File</strong>
							</div>
							<div class="col-md-5">
								<input class="form-control" id="myInput" type="text" placeholder="Search..">
							</div>
						</div>
					</div>
					<div class="card-body">
						<table class="table table-striped table-bordered text-center" text-align="center">
                            <thead>
								<tr>
									<th>No.</th>
									<th>File Name</th>
									<th>Upload Date</th>
									<th colspan="2">Action</th>
								</tr>
							</thead>
                            <?php
								$result = mysqli_query($conn,"SELECT * FROM attendance_file ORDER BY upload_date DESC");
								$counter = 0;
								while($row = mysqli_fetch_array($result)) {
								?>
								<tbody id="myTable">
									<tr>
										<td width="5%"><?php echo ++$counter ;?></td>
										<td width="40%"><?php echo $row["attendance_file_name"]; ?></td>
										<td width="35%"><?php echo $row["upload_date"]; ?></td>
										<td width="10%"><a class="btn btn-sm btn-secondary" href="download_file.php?attendance_file_name=<?php echo $row['attendance_file_name']?>"> <i class="fa fa-download"></i>&nbsp; Download</a></td>
										<td width="10%"><a class="btn btn-sm btn-danger" href="Delete_file.php?file_id=<?php echo $row["file_id"]; ?>"> <i class="fa fa-scissors"></i>&nbsp; Delete</a></td>
									</tr>
								</tbody>
								<?php
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

<!-- Right Panel -->
	<?php include "includes/footer.php"; 
		} 
	else 
	{	
	session_start();
	session_destroy();
	header('location:index.php');
	}
	?>
