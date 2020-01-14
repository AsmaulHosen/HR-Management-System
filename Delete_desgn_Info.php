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
        window.location='http://localhost/project/desgn_info.php';
      });
    }
  </script>

</header>
<?php
    mysqli_query($conn,"DELETE FROM desgn_info WHERE desgn_id='" . $_GET["desgn_id"] . "'");
    echo "<script type= 'text/javascript'>MydeleteFn();
	</script>";
?>
