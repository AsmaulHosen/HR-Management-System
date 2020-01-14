<?php
    include 'includes/header.php' ;
    include 'connection/connect.php';
	include 'signin_checker.php' ;
?>
<header>
  <script>
    function MydeleteFn(){
      swal({
        title: "Empployee type has been deleted",
        text: "",
        type: "warning",
        timer: 2000,
        showConfirmButton: false,
      },
      window.load = function(){
        window.location='http://localhost/project/employee_type.php';
      });
    }
  </script>

</header>
<?php
    mysqli_query($conn,"DELETE FROM employee_type WHERE employee_type_id='" . $_GET["employee_type_id"] . "'");
    echo "<script type= 'text/javascript'>MydeleteFn();
	</script>";
?>
