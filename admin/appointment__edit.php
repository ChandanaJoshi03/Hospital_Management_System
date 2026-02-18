
<?php
include("db_connect.php");
$appointment_id=$_REQUEST['appointment_id'];
$sql="select * from appointment where appointment_id='$appointment_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

?>
<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
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
        <div class="col-md-6">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title"> </h3>
            </div>
<form name="form1" id="formID" method="post" action="appointment__update.php">
<input type="hidden" name="appointment_id" value="<?php echo $row['appointment_id'];?>">
  <table width="386" height="301" border="0" align="center">
   
    <tr>
      <td width="176">Patient ID </td>
      <td width="217"><select name="patient_id" id="patient_id" class="validate[required] form-control">
        <option value="">Select Patient ID</option>
        <?php
	
	  $sql1="select * from p_details";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['patient_id'];?>" <?php if($row['patient_id']==$row['patient_id']) { ?> selected <?php } ?>> <?php echo $row1['patient_full_name'];?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Appointment Name </td>
      <td><input name="appointment_name" type="text" id="appointment_name" value="<?php echo $row ['appointment_name'];?>" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td>Appointment Date </td>
      <td><input name="appointment_date" type="text" id="appointment_date" value="<?php echo $row ['appointment_date'];?>" class="validate[required,custom[date]] form-control"></td>
    </tr>
    <tr>
      <td>Appointment Status </td>
      <td><input name="appointment_status" type="text" id="appointment_status" value="<?php echo $row ['appointment_status'];?>" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
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
