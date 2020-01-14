<?php
    include 'includes/header.php' ;
    include 'connection/connect.php';
	include 'signin_checker.php' ;
?>
<header>
  <script>
    function MydeleteFn(){
      swal({
        title: "Department has been deleted",
        text: "",
        type: "warning",
        timer: 2000,
        showConfirmButton: false,
      },
      window.load = function(){
        window.location='http://localhost/project/dept_info.php';
      });
    }
  </script>

</header>
<?php
    mysqli_query($conn,"DELETE FROM dept_info WHERE dept_id='" . $_GET["dept_id"] . "'");
    echo "<script type= 'text/javascript'>MydeleteFn();
	</script>";
?>
