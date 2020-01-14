<?php
session_start(); 
$con=mysqli_connect("localhost","root","","mango");

		if(isset($_POST["insert"])){
			
			if(isset($_FILES["fileToUpload"]["name"]) && $_FILES["fileToUpload"]["name"] != ''){
			//echo 123;exit;
			$target_dir = "images/";
			$newName = date('YmdHis_');
			$newName .= basename($_FILES["fileToUpload"]["name"]);
			$target_file = $target_dir . $newName;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			
			// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Image already exists.";
				$uploadOk = 0;
			}
			
			
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 5000000) {
				echo "Sorry, Picture size is too large.";
				$uploadOk = 0;
			}
			
			// Allow certain file formats
			if($imageFileType != "JPG" &&$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
				$checkFlag = FALSE;
			// if everything is ok, try to upload file
			} else {
				
				if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					echo "The file ". $newName. " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
					$checkFlag = FALSE;
				}
			}
		}else{
			$newName = $_POST['image'];
		} 
			
			$Name=$_POST["Name"];
			$phone=$_POST["phone"];
			$date=$_POST["date"];
			$salary=$_POST["salary"];
			
			$query="INSERT INTO `staff` (`Name`,`phone`, `image`, `date`, `salary`) values 
			('$Name', '$phone', '$newName', '$date', '$salary')";
				
					if(mysqli_query($con, $query)== TRUE) {echo "Staff Add Successfully <br/>";}
					else {echo mysqli_error($con);}
		
		
		}
		
		
		if(isset($_POST["update"])){
		if($_POST["update"]=="yes"){
			
			if(isset($_FILES["fileToUpload"]["name"]) && $_FILES["fileToUpload"]["name"] != ''){
			//echo 123;exit;
			$target_dir = "images/";
			$newName = date('YmdHis_');
			$newName .= basename($_FILES["fileToUpload"]["name"]);
			$target_file = $target_dir . $newName;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			
			// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Image already exists.";
				$uploadOk = 0;
			}
			
			
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 5000000) {
				echo "Sorry, Picture size is too large.";
				$uploadOk = 0;
			}
			
			// Allow certain file formats
			if($imageFileType != "JPG" &&$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
				$checkFlag = FALSE;
			// if everything is ok, try to upload file
			} else {
				
				if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					echo "The file ". $newName. " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
					$checkFlag = FALSE;
				}
			}
		}else{
			
			
			if (isset($_POST['image'])){
			$newName = $_POST['image'];
			//echo $imagedit;exit;
			}
			else
			{
				$newName = $_SESSION['pic'];
				//echo $image;exit;
			}
		}
			
			$Name=$_POST["Name"];
			$phone=$_POST["phone"];
			$date=$_POST["date"];
			$salary=$_POST["salary"];
			
			
			
		$query="UPDATE `staff` SET Name='$Name', phone='$phone', image='$newName',date='$date',salary='$salary' where staff_id=".$_POST['staff_id'];
		
		//echo $query;exit;
				
			if(mysqli_query($con,$query))
			echo "<h5>Staff Updated !</h5><br>";		
		else echo mysqli_error($con);
		}
		header('location:staff.php');
		}
		
		

			
?>