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
<?php
session_start(); 
$con=mysqli_connect("localhost","root","","mango");
if(isset($_GET['operation'])){
		if($_GET['operation']=="Delete"){
			$query="DELETE FROM `staff` WHERE staff_id=".$_GET['staff_id'];	
			if(mysqli_query($con,$query)==TRUE)
			echo "<h5>Staff Deleted!</h5><br/>";
		header('location:staff.php');
			}
			
		}
?>
<body>

	<div class="panel panel-primary panel-top">
      <div class="panel-heading">
        <span class="heading" color="black">Staff</span>
        <button id="btnCreate" type="button" class="btn btn-default pull-right hidden-print" data-toggle="modal" data-target="#createModal"><i class="glyphicon glyphicon-plus"> </i> Add New Staff</button>
        <button style="margin-left:5px;margin-right:5px;" title="Print" type="button" onclick="window.print();" class="btn btn-info pull-right hidden-print"><i class="glyphicon glyphicon-print"></i></button>
        <button id="btnRefresh" class="btn btn-success pull-right hidden-print" title="Refresh"><i class="glyphicon glyphicon-refresh"></i></button>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th width="10%" >#</th>
                    <th width="10%">Full Name</th>
                    <th width="10%">Phone Number</th>
                    <th width="10%">Staff Photo</th>
                    <th width="10%">Joining Date</th>
                    <th width="10%">Monthly Salary</th>
                    <th class="hidden-print" colspan="2" width="20%" >Action</th>
                </tr>
            </thead>
			
<?php

	$con=mysqli_connect("localhost","root","","mango");
	$query = "SELECT * FROM `staff`";
	$result=mysqli_query($con,$query);
	if(!$result) echo mysqli_error($con);

	while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
		
	<tr>	
	<td><?=$row['staff_id']?></td>
	<td><?=$row['Name']?></td>
	<td><?=$row['phone']?></td>
	<td ><img height = 80px width = 80px src="images/<?=$row['image']?>" ></td>
	<td><?=$row['date']?></td>
	<td><?=$row['salary']?></td>
	<td><a class="btn btn-info" href="updateStaff.php?operation=Edit&staff_id=<?=$row['staff_id']?>">Edit</a>
	
	<a class="btn btn-danger" onclick="return confirm('Are you sure to delete this staff?')" href="staff.php?operation=Delete&staff_id=<?=$row['staff_id']?>">Delete</a></td>
	</tr>
	
	<?php
	}
	?>

		
            <tbody id="staffRows">
                
            </tbody>
        </table>
      </div>
    </div>


    <!--Create Modal-->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <form id="createAjax" enctype="multipart/form-data" action="staffInfo.php" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="heading">Add New Staff</h4>
          </div>
          <div class="modal-body">
                 


                  <div class="form-group">
				  <label for="Name">Full Name:</label>
				  <input type="Name" class="form-control" id="Name" placeholder="Enter Name" name="Name">
				</div>
				<div class="form-group">
				  <label for="phone">Phone Number:</label>
				  <input type="phone" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
				</div>
				
				  <div class="form-group">
					<label for="File1">Staff Photo</label>
					<input type="file" class="form-control-file" id="image" name = "fileToUpload">
				  </div>
				 <div class="form-group">
				  <label for="date">Joining Date:</label>
				  <input type="date" class="form-control" id="datepicker" placeholder="Enter Joining Date" name="date">
				</div>
				
				<div class="form-group">
				  <label for="salary">Monthly Salary:</label>
				  <input type="salary" class="form-control" id="salary" placeholder="Enter Monthly Salary" name="salary">
				</div>
				<button type="submit" class="btn btn-outline btn-primary btn-lg" name="insert">Submit</button>
				
              <input type="hidden" name="role_name_input" id="role_name_input">


          </div>

        </div><!-- /.modal-content -->
        </form>
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
	
 



</body>
</html>