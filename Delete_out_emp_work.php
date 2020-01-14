<?php
    include 'includes/header.php' ;
    include 'connection/connect.php';
	include 'signin_checker.php' ;
?>
<header>
  <script>
    function MydeleteFn(){
      swal({
        title: "Information has been deleted",
        text: "",
        type: "warning",
        timer: 2000,
        showConfirmButton: false,
      },
      window.load = function(){
        window.location='http://localhost/project/Outdoor_emp_work.php';
      });
    }
  </script>

</header>
<?php
    mysqli_query($conn,"DELETE FROM out_work_info WHERE requisition_id='" . $_GET["requisition_id"] . "'");
    echo "<script type= 'text/javascript'>MydeleteFn();
	</script>";
?>
