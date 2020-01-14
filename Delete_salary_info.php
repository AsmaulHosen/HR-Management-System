<?php
    include 'includes/header.php' ;
    include 'connection/connect.php';
	include 'signin_checker.php' ;
?>
<header>
  <script>
    function MydeleteFn(){
      swal({
        title: "Salary Information has been deleted",
        text: "",
        type: "warning",
        timer: 2000,
        showConfirmButton: false,
      },
      window.load = function(){
        window.location='http://localhost/project/Salary_Info.php';
      });
    }
  </script>

</header>
<?php
    mysqli_query($conn,"DELETE FROM salary_info WHERE salary_id='" . $_GET["salary_id"] . "'");
    echo "<script type= 'text/javascript'>MydeleteFn();
	</script>";
?>
