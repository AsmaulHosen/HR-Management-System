<?php
    include 'includes/header.php' ;
    include 'connection/connect.php';
	include 'signin_checker.php' ;
?>
<header>
  <script>
    function MydeleteFn(){
      swal({
        title: "Holiday Information has been deleted",
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
    mysqli_query($conn,"DELETE FROM holiday_info WHERE holiday_info_id='" . $_GET["holiday_info_id"] . "'");
    echo "<script type= 'text/javascript'>MydeleteFn();
	</script>";
?>
