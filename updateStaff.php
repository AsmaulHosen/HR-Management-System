<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mango</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<?php

            session_start(); 
	        $con=mysqli_connect("localhost","root","","mango");
	
            $id = $_GET['staff_id'];
			$query = "SELECT * FROM staff where staff_id= '$id'";
			$result=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
				$name = $row['Name'];
				$phone = $row['phone'];
				$_SESSION['pic'] = $row['image'];
				$date = $row['date'];
				$salary = $row['salary'];
				
			}
			
?>

<div class="container">
  <h1>Update Staff Information</h1>
  <form action="staffInfo.php" method="post" enctype="multipart/form-data" >
				<div class="form-group">
				
				  <label for="Name">Full Name:</label>
				  <input type="Name" class="form-control" id="Name" placeholder="Enter Name" value="<?php echo $name ;?>" name="Name">
				</div>
				<div class="form-group">
				  <label for="phone">Phone Number:</label>
				  <input type="phone" class="form-control" id="phone" placeholder="Enter Phone Number" value="<?php echo $phone;?>" name="phone">
				</div>
				
				  <div class="form-group">
					<label for="File1">Staff Photo</label>
					<input type="file" class="form-control-file" id="image" name="fileToUpload">
				  </div>
				 <div class="form-group">
				  <label for="date">Joining Date:</label>
				  <input type="date" class="form-control" id="datepicker" placeholder="Enter Joining Date" value="<?php echo $date;?>" name="date">
				</div>
				
				<div class="form-group">
				  <label for="salary">Monthly Salary:</label>
				  <input type="salary" class="form-control" id="salary" placeholder="Enter Monthly Salary" value="<?php echo $salary;?>" name="salary">
				</div>
				
				<input type="hidden" name="staff_id" value="<?php echo $_GET['staff_id'] ?>" />
					<input type="hidden" name="update" value="yes" />
					<input type="submit" class="btn btn-outline btn-primary btn-lg" value="Update"/>
  </form>
</div>


</body>
</html>







