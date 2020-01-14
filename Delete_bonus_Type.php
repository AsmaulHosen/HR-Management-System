<?php
    include 'includes/header.php' ;
    include 'connection/connect.php';
	include 'signin_checker.php' ;
?>
<header>
	<script>
    function MydeleteFn(){
      swal({
        title: "Bonus type has been deleted",
        text: "",
        type: "warning",
        timer: 2000,
        showConfirmButton: false,
      },
      window.load = function(){
        window.location='http://localhost/project/bonus_type.php';
      });
    }
	</script>

</header>
<?php
    mysqli_query($conn,"DELETE FROM bonus_type WHERE bonus_type_id='" . $_GET["bonus_type_id"] . "'");
    echo "<script type= 'text/javascript'>MydeleteFn();
	</script>";
?>
