<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['uname']; ?> </p>
         <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->      <ul class="sidebar-menu">
        <li class="header"></li>
        <li class="active treeview">
          <a href="home.php">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
       
        </li>
		
		
		   <li class="treeview">
          <a href="appointment_form_view.php">
            <i class="fa fa-table"></i> <span>Appointment</span>			
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  </li>
		  
		 <!-- <li class="treeview">
          <a href="appointment_cancle_view.php">
            <i class="fa fa-table"></i> <span>Appointment Cancel</span>			
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  </li>-->
		
		<li class="treeview">
          <a href="employee_details_view.php">
            <i class="fa fa-table"></i> <span>Employee Detail</span>			
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		 </li>
		 
		    <li class="treeview">
          <a href="employee_to_shift _view.php">
            <i class="fa fa-table"></i> <span>Employee Shift</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		 </li>
		 
		 
		  
		   <li class="treeview">
          <a href="patient_details_view.php">
            <i class="fa fa-table"></i> <span>Patient Detail</span>			
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		
		   
		   
		 <li class="treeview">
          <a href="patient_hd_details_view.php">
            <i class="fa fa-table"></i> <span>Patient Health Detail</span>			
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>		  
		   </li>
		   
		   
       <li class="treeview">
          <a href="patient_test_view.php">
            <i class="fa fa-pie-chart"></i>
            <span>Patient Tests</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
		  <li class="treeview">
          <a href="patient_tests_report.php">
            <i class="fa fa-pie-chart"></i>
            <span>Patient Test Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
		
		
        <li>
          <a href="shift_details_view.php">
            <i class="fa fa-th"></i> <span>Shift Detail</span>
           
          </a>
        </li>
       
        <li class="treeview">
          <a href="test_details_view.php">
            <i class="fa fa-laptop"></i>
            <span>Tests</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
		

     
		
		
        <!--<li class="header">Manage</li> -->
        <li><a href="change_password.php"><i class="fa fa-circle-o text-red"></i> <span>Change Password</span></a></li>
        <li><a href="../login/logout.php"><i class="fa fa-circle-o text-yellow"></i> <span>Logout</span></a></li>
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>