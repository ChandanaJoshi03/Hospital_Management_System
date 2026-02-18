			<?php
include('db_connect.php');
$employee_id=$_REQUEST['employee_id'];
$sql="select * from  employee_details where employee_id='$employee_id'";
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
        <div class="col-md-6">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title"> </h3>
            </div>
<form name="form1" id="formID" method="post" action="employee_details_update.php">
<input type="hidden" name="employee_id" value="<?php echo $row['employee_id'];?>">

  <table width="507" height="557" border="0" align="center">
   
    <tr>
      <td width="176">Employee Name </td>
      <td width="210"><input name="employee_name" type="text" id="employee_name"placeholder="Enter Employee Name"value="<?php echo $row ['employee_name'];?>" class="validate[required,custom[onlyLetter]]  form-control"></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input name="gender" type="text" id="gender"placeholder="Enter Gender"value="<?php echo $row ['gender'];?>" class="validate[required,custom[onlyLetter]]  form-control"></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><input name="DOB" type="date" id="DOB"placeholder="Enter Date Of Birth" value="<?php echo $row ['dob'];?>" class="validate[required,custom[date]]  form-control"></td>
    </tr>
    <tr>
      <td>Designation</td>
      <td><input name="designation" type="text" id="designation"placeholder="Enete Destignation"value="<?php echo $row ['designation'];?>" class="validate[required,custom[onlyLetter]]  form-control"></td>
    </tr>
    <tr>
      <td>Experience</td>
      <td><input name="experience" type="text" id="experience"placeholder="Enter Your Experience" value="<?php echo $row ['experience'];?>" class="validate[required,custom[onlyLetter]]  form-control"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input name="address" type="text" id="address"placeholder="Enter Address" value="<?php echo $row ['address'];?>" class="validate[required,custom[onlyLetter]]  form-control"></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" id="city"placeholder="Enter City" value="<?php echo $row ['city'];?>" class="validate[required,custom[onlyLetter]]  form-control"></td>
    </tr>
    <tr>
      <td>Contact Number </td>
      <td><input name="contact_no" type="text" id="contact_no"placeholder="Enter Valid Contact Number" value="<?php echo $row ['contact_no'];?>" class="validate[required,custom[mobile]]  form-control"></td>
    </tr>
    <tr>
      <td>E-mail ID </td>
      <td><input name="email_ID" type="text" id="email_ID"placeholder="Enter Valid E-mail" value="<?php echo $row ['email_id'];?>" class="validate[required,custom[email]]  form-control"></td>
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
