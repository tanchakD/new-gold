 <?php 
 $emp=$_SESSION['Empid'];
  $name=$_SESSION['name'];
 ?>
 <header class="app-header" style="background:#222d32;"><a class="app-header__logo" href="index.php" style="background:#222d32; font-family: 'Lato', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; font-size:20px;"><img src="../img/logoMain.png" alt="" height="50px"> Luxury Gold</a>
 </a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
      
       
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i> <b>Welcome Back </b>:-<?php echo $name.' '.$emp;?></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="change-password.php"><i class="fa fa-cog fa-lg"></i> Change Password</a></li>
            <li><a class="dropdown-item" href="my-profile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>