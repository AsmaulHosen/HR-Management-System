<?php
    include 'includes/header.php' ;
    include 'connection/connect.php';
	include 'signin_checker.php' ;
?>
<header>
  <script>
    function MydeleteFn(){
      swal({
        title: "Employee has been deleted",
        text: "",
        type: "warning",
        timer: 2000,
        showConfirmButton: false,
      },
      window.load = function(){
        window.location='http://localhost/project/view_Employee.php';
      });
    }
  </script>

</header>
<?php
    //mysqli_query($conn,"DELETE FROM employee_info WHERE employee_id='" . $_GET["employee_id"] . "'");
    mysqli_query($conn,"DELETE employee_info,user
	FROM employee_info
	INNER JOIN user
	ON user.Name = employee_info.employee_name
	WHERE employee_info.employee_id='" . $_GET["employee_id"] . "'");
    echo "<script type= 'text/javascript'>MydeleteFn();
	</script>";
?>
