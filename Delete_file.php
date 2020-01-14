<?php
    include 'includes/header.php' ;
    include 'connection/connect.php';
	include 'signin_checker.php' ;
?>
<header>
  <script>
    function MydeleteFn(){
      swal({
        title: "File has been deleted",
        text: "",
        type: "warning",
        timer: 2000,
        showConfirmButton: false,
      },
      window.load = function(){
        window.location='http://localhost/project/attendance.php';
      });
    }
  </script>

</header>
<?php
    mysqli_query($conn,"DELETE FROM attendance_file WHERE file_id='" . $_GET["file_id"] . "'");
    echo "<script type= 'text/javascript'>MydeleteFn();
	</script>";
?>
