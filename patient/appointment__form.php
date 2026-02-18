<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); 
  
  include('cal.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      APPOINTMENT FORM</h1>
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

<form name="form1" id="formID" method="post" action="appointment__form_insert.php">
  <table width="386" height="301" border="0" align="center">
   
    <tr>
      <td width="176">Patient ID </td>
      <td width="207"><select name="patient_id" id="patient_id" class="validate[required] form-control" >
       <!-- <option value="">--Select Patient--</option> -->
        <?php
		$username=$_SESSION['username'];
	  include("db_connect.php");
	 echo  $sql="select * from p_details where contact_no='$username'";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
        <option value="<?php echo $row['patient_id'];?>"> <?php echo $row['patient_full_name'];?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Appointment Details </td>
      <td><input name="appointment_name" type="text" id="appointment_name" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td>Appointment Date </td>
      <td>
	  <?php					
      $date_default = "";
     
      
	 
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-50;



	  $myCalendar = new tc_calendar("appointment_date", true, true);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(date('Y'), 2035);
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?>
	  
	 <!-- <input name="appointment_date" type="text" id="appointment_date" class="validate[required,custom[date]] form-control" > --></td>
    </tr>
    <!--<tr>
      <td>Appointment session </td>
      <td><input name="appointment_status" type="text" id="appointment_status" class="validate[required,custom[onlyLetter]] form-control">        </td>
    </tr> -->
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="SUBMIT" class="btn btn-success">      
        <input type="reset" name="Reset" value="RESET" class="btn btn-danger">
      </div></td>
    </tr>
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
