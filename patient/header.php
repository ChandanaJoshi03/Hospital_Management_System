<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php


include("db_connect.php");
//$patient_id=$_REQUEST['patient_id'];
$username=$_SESSION['username'];
$sql="select * from  p_details where contact_no='$username'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

?>
  <header class="main-header">
    <!-- Logo -->
    <a href="http://localhost/Hospital/patient/home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Profile of </b><?php echo $row ['patient_full_name'];?> </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../photo/<?php echo $row ['photo'];?>" class="user-image" alt="User Image">
              <span class="hidden-xs">
			  <strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?>
			  </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../photo/<?php echo $row ['photo'];?>" class="img-circle" alt="User Image">

                <p>
				  <small style="display: block; color: #777;">Username</small>
				   <?php echo htmlspecialchars($_SESSION['username']); ?>
				  <small>Patient Panel</small>
				</p>
              </li>
              <!-- Menu Body -->
            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="change_password.php" class="btn btn-default btn-flat">Change Password</a>
                </div>
                <div class="pull-right">
                  <a href="../login/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        
        </ul>
      </div>
    </nav>
  </header>
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../photo/<?php echo $row ['photo'];?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['username']; ?> </p>
         <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>