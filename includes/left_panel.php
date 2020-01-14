

<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
	<nav class="navbar navbar-expand-sm navbar-default">
		
		<div class="navbar-header">
			<?php
			include 'connection/connect.php';
			$result = mysqli_query($conn,"SELECT company_name FROM company_info ");
            $row= mysqli_fetch_array($result);
			
			?>
			<a class="navbar-brand" href="./"><?php echo $row['company_name']; ?></a>
			
		</div>
		
		<div id="main-menu" class="main-menu collapse navbar-collapse">
			
			<ul class="nav navbar-nav">
				<li class="">
					<a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
				</li>
				<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==5)){ ?>
				<li class="">
					<a href="Company_Info.php"> <i class="menu-icon fa fa-home"></i>Company</a>
				</li>
				<?php } ?> 
				<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==5)){ ?>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-university"></i>Office Information</a>
					<ul class="sub-menu children dropdown-menu">
					<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==5)){ ?>
						<li><i class="fa fa-building-o"></i><a href="dept_info.php">Department </a></li>
						<li><i class="fa fa-user-secret"></i><a href="desgn_info.php">Designation  </a></li>
					<?php } ?>
					<?php if ($_SESSION['Acess']==1){ ?>
						<li><i class="fa fa-lock"></i><a href="acess_control.php">Access Control </a></li>
					<?php } ?>
					</ul>
				<?php } ?>	
				</li>
				<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==5)){ ?>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Employee Information</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="fa fa-indent"></i><a href="Employee_Type.php">Employee Type</a></li>
						<li><i class="fa fa-user"></i><a href="Employee.php">Add Employee </a></li>
						<li><i class="fa fa-eye"></i><a href="view_Employee.php">View Employee </a></li>
						<li><i class="fa fa-sign-out"></i><a href="Outdoor_Emp_work.php">Outdoor Work</a></li>
					</ul>
				</li>
				<?php } ?>
				<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==5)||($_SESSION['Acess']==2)){ ?>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Salary Information</a>
					<ul class="sub-menu children dropdown-menu">
						<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==5)||($_SESSION['Acess']==2)){ ?>
						<li><i class="fa fa-credit-card"></i><a href="Salary_Info.php">Salary</a></li>
						<li><i class="fa fa fa-fire"></i><a href="bonus_type.php">Bonus</a></li>
						<?php } ?>
						<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==2)){ ?>
						<li><i class="fa fa-dollar (alias)"></i><a href="salary_generate.php">Salary Generate</a></li>
						<li><i class="fa fa-eye"></i><a href="view_salary.php">View Salary</a></li>
						<?php } ?>
					</ul>
				</li>
				<?php } ?>
				<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==3)){ ?>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-clock-o"></i>Time Sheet</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="fa fa-clock-o"></i><a href="attendance.php">Attendance</a></li>
						<li><i class="fa fa-check-square-o"></i><a href="fixed_attendance.php">Fixed Attendance</a></li>
						
						<li><i class="fa fa-calendar"></i><a href="holiday_info.php">Holiday Information</a></li>
					</ul>
				</li>
				<?php } ?>
				<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)||($_SESSION['Acess']==2)||($_SESSION['Acess']==6)){ ?>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Report</a>
					<ul class="sub-menu children dropdown-menu">
					<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==4)){ ?>
						<li><i class="fa fa-clock-o"></i><a href="report_attendance.php">Employee Attendance</a></li>
						<li><i class="fa fa-th-list"></i><a href="attendance_summery.php">Attendance Summery </a></li>
					<?php } ?>
					<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==6)){ ?>
						<li><i class="fa fa-pie-chart"></i><a href="charts.php">Charts</a></li>	
					<?php } ?>
					<?php if(($_SESSION['Acess']==1)||($_SESSION['Acess']==2)){ ?>
						<li><i class="fa fa-bar-chart"></i><a href="salary_charts.php">Salary Chart</a></li>
					<?php } ?>
					</ul>
				</li>
				<?php } ?>
				
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->
<!-- Right Panel -->

<div id="right-panel" class="right-panel">
