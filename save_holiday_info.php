
<?php
    include 'includes/header.php' ;
	include 'signin_checker.php' ;
    include 'connection/connect.php';
?>
<header>
	<script>
		function MySucessFn(){
			swal({
				title: "Holiday Information Add Sucessfully!",
				text: "",
				type: "success",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/holiday_info.php';
			});
		}
		function MyCheckFn(){
			swal({
				title: "Sorry User!This Holiday Information already exists..!",
				text: "",
				type: "warning",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='http://localhost/project/holiday_info.php';
			});
		}
	</script>
	
</header>

<?php
    if(isset($_POST['save']))
    {
		// variables for input data
        $holiday_info_id = uniqid('Hol');
        $holiday_title = $_POST['holiday_title'];
        $from=$_POST['datefrom'];
        $fromdate = date('Y-m-d', strtotime($from));
        $to=$_POST['dateto'];
        $todate = date('Y-m-d', strtotime($to));
		
		
        $duplicate=mysqli_query($conn,"select * from holiday_info where holiday_title='$holiday_title'");
        if (mysqli_num_rows($duplicate)>0)
        {
			echo "<script type= 'text/javascript'>MyCheckFn();
            </script>";
		}
        else
        {
			// sql query for inserting data into database
			mysqli_query($conn,"insert into holiday_info values ('$holiday_info_id','$holiday_title','$fromdate','$todate')") or die(mysqli_error());
			echo "<script type= 'text/javascript'>MySucessFn();
            </script>";
		}
	}
?>
