<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); 
   include('cal.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     EMPLOYEE DETAILS</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">INFO</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	 <div class="row">
        <div class="col-md-12">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title"> </h3>
            </div>
<form name="form1"  id="formID" method="post" action="employee_details_insert.php">
  <table width="507" height="557" border="0" align="center">

    <tr>
      <td width="170">Employee Name </td>
      <td width="310"><input name="employee_name" type="text" id="employee_name" placeholder="Enter Employee Name" class="validate[required,custom[onlyLetter]]  form-control"></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input name="gender" type="radio" value="Male" class="validate[required]" /> 
        Male 
          <input name="gender" type="radio" value="Female" class="validate[required]" /> 
          Female </td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><?php					
      $date_default = "";
     
      
	 
         $date_default =date('Y-m-d');
     // $year=date('Y')-10;
	  $syear=date('Y')-50;



	  $myCalendar = new tc_calendar("DOB", true, true);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1950, 2002);
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?>
	  <!--<input name="DOB" type="date" id="DOB"placeholder="Enter Date Of Birth" class="validate[required,custom[date]]  form-control"> --></td>
    </tr>
    <tr>
      <td>Designation</td>
      <td><input name="designation" type="text" id="designation"placeholder="Enter Destignation" class="validate[required,custom[onlyLetter]]  form-control"></td>
    </tr>
    <tr>
      <td>Experience</td>
      <td><input name="experience" type="text" id="experience"placeholder="Enter Your Experience" class="validate[required,custom[onlyLetter and n]]  form-control"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address" class="validate[required,custom[onlyLetter]]  form-control" id="address" placeholder="Enter Address"></textarea></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" id="city"placeholder="Enter City" class="validate[required,custom[onlyLetter]]  form-control"></td>
    </tr>
    <tr>
      <td>Contact Number</td>
      <td><input name="contact_no" type="text" id="contact_no"placeholder="Enter Valid  Contact Number" class="validate[required,custom[mobile]]  form-control"></td>
    </tr>
    <tr>
      <td>E-mail ID </td>
      <td><input name="email_ID" type="text" id="email_ID"placeholder="abc@gmail.com" class="validate[required,custom[email]]  form-control"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="SUBMIT" class="btn btn-success">        
        <input type="reset" name="Reset" value="RESET" class="btn btn-danger">
      </div></td></tr>
  </table>
</form>
</div>
</div>
</div>
 </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include('footer.php'); ?>
   <?php include('script.php'); ?>
   <?php include('val.php'); ?>
