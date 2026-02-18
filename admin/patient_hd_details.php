<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
  
  <?php include('cal.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    PATIENT HEALTH DETAILS </h1>
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
<form name="form7" id="formID" method="post" enctype="multipart/form-data" action="patient_hd_details_insert.php">
   <table width="381" height="353" border="0" align="center">
   
    <tr>
      <td width="213">Patient ID </td> 
      <td width="216"><select name="p_id" id="p_id" class="validate[required] form-control	">
        <option value="">Select patient_id</option>
		   <?php
	  include('db_connect.php');
	  $sql="select * from p_details";
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
      <td>Health Details </td>
      <td><textarea name="health_details" class="validate[required,custom[onlyLetter]] form-control" id="health_details"></textarea>
      </td>
    </tr>
    <tr>
      <td>Updated Date </td>
      <td>
	  <?php					
      $date_default = "";
     
      
	 
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-50;



	  $myCalendar = new tc_calendar("update_date", true, true);
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
	  <!--<input name="update_date" type="text" id="update_date" class="validate[required,custom[date]] form-control"> -->
      </td>
    </tr>
    <tr>
      <td>Health Report Attachment</td>
      <td><input name="health_report_attachment" type="file" id="health_report_attachment" required class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input name="Submit" type="submit" id="Submit" value="SUBMIT" class="btn btn-success">
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

