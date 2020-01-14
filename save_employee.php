<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'connection/connect.php';
?>
<header>
	<script>
		function MySucessFn(){
			swal({
				title: "New Employee Information Add Sucessfully!",
				text: "",
				type: "success",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/Employee.php';
			});
		}
		function MyCheckFn(){
			swal({
				title: "Sorry User!! Employee ID already exists..Please Fill up the form again",
				text: "",
				type: "warning",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/Employee.php';
			});
		}
	</script>

</header>

<?php
    $Password="";
    if(isset($_POST['save'])){
        function generateRandomString()  {
            $characters = '0123456789';
            $length = 4;
            $charactersLength = strlen($characters);
            $randomString = 'EMP';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
			}
            return $randomString;
		}
        function generateRandomStringPassword()  {
            $characters = '0123456789ABCDEfghijKLMNOpqrstuvWXYz@#$%&?/';
            $length = 10;
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
			}
            return $randomString;
		}
        if(isset($_FILES["fileToUpload"]["name"]) && $_FILES["fileToUpload"]["name"] != ''){
			//echo 123;exit;
			$target_dir = "images/upload/";
			$newName = date('YmdHis_');
			$newName .= basename($_FILES["fileToUpload"]["name"]);
			$target_file = $target_dir . $newName;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				$uploadOk = 1;
				} else {
				$uploadOk = 0;
			}
			// Check if file already exists
			if (file_exists($target_file)) {
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 5000000) {
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "JPG" &&$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				$uploadOk = 0;
			}
			
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				$checkFlag = FALSE;
				// if everything is ok, try to upload file
				} else {
				if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					} else {
					$checkFlag = FALSE;
				}
			}
			//echo $newName;exit;
			}else{
			$newName = $_POST['image'];
			//echo $newName;exit;
		}
		// variables for input data(employee table)
        $employee_id = uniqid('Emp');
        $employee_name = $_POST['employee_name'];
        $employee_type=$_POST['employee_type'];
        $employee_gender=$_POST['employee_gender'];
        $employee_dept=$_POST['employee_dept'];
        $employee_desgn=$_POST['employee_desgn'];
        $employee_pay=$_POST['employee_pay'];
        $employee_idno=generateRandomString();
        $employee_dob=$_POST['employee_dob'];
        $employee_joindate=$_POST['employee_joindate'];
        $employee_contNum=$_POST['employee_contNum'];
        $employee_email=$_POST['employee_email'];
        $employee_ref=$_POST['employee_ref'];
        $employee_marital_status=$_POST['employee_marital_status'];
        $employee_nid=$_POST['employee_nid'];
        $employee_passportid=$_POST['employee_passportid'];

        // variables for input data(user table)
        $User_ID=uniqid('User');
        $Email=$_POST['employee_email'];
        $Password = generateRandomStringPassword();
        $Name=$_POST['employee_name'];
        $Type=$_POST['employee_type'];

        include 'send_mail.php';


        //Check duplicate value
        $duplicate=mysqli_query($conn,"select * from employee_info where employee_name='$employee_name' and employee_email='$employee_email'");
        if (mysqli_num_rows($duplicate)>0)
        {
			echo "<script type= 'text/javascript'>MyCheckFn();
            </script>";
		}
        else
        {
            // sql query for inserting data into database
            $sql = "INSERT INTO `employee_info`(`employee_id`, `employee_name`, `employee_type`, `employee_gender`, `employee_dept`, `employee_desgn`, `employee_pay`, `employee_idno`, `employee_dob`, `employee_joindate`, `newName`, `employee_contNum`, `employee_email`, `employee_ref`, `employee_marital_status`, `employee_nid`, `employee_passportid`, `employee_emg_contNum`, `father_name`, `mother_name`, `present_address`, `permanent_address`) VALUES 
			('$employee_id','$employee_name','$employee_type','$employee_gender',
			'$employee_dept','$employee_desgn','$employee_pay','$employee_idno',
			'$employee_dob','$employee_joindate','$newName','$employee_contNum',
			'$employee_email','$employee_ref','$employee_marital_status','$employee_nid','$employee_passportid','','','','','')";
          //echo $sql;exit;
		   $result=mysqli_query($conn, $sql) or die(mysqli_error ($conn));
            if($result==1)
            {
                $sql2= "insert into user(`User_ID`,`Email`,`Password`,`Name`,`Type`,`Acess`) values ('$User_ID','$Email','$Password','$Name','$Type',6)";
				
                $result2=mysqli_query($conn, $sql2) or die(mysqli_error ($conn));
                if ($result2==1)
                {
                    echo "<script type= 'text/javascript'>MySucessFn();</script>";
				}
			}
            else
            {
                echo "<script type= 'text/javascript'>MyCheckFn();</script>";
			}
		}
	}
?>
