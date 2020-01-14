<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
	  
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
		 
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
			<li class="nav-item">
			<?php  if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']==TRUE) {?>
				<a href="logout.php" class="btn btn-default">(<?php echo $_SESSION['username'] ?>)Logout</a>
			<?php }else {?>
				<a href="login.php" class="btn btn-default">Login</a>
			<?php } ?>
            </li>
		
          </ul>
        </div>
      </div>
	
    </nav>