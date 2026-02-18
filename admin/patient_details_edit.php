<?php
include('db_connect.php');
$patient_id=$_REQUEST['patient_id'];
$sql="select * from  p_details where patient_id='$patient_id'";
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
    PATIENT DETAILS </h1>
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
<form action="patient_details_update.php" id="formID" method="post" enctype="multipart/form-data" name="form1">
<input type="hidden" name="patient_id" value="<?php echo $row['patient_id'];?>">

  <table width="503" height="642" border="0" align="center">
    
    <tr>
      <td width="207" height="60">Patient Full Name </td>
      <td width="275"><input name="p_full_name" type="text" id="p_full_name"placeholder="Enter Your Full Nme" value="<?php echo $row ['patient_full_name'];?>"  class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td height="60">Patient Address </td>
      <td><input name="p_address" type="text" id="p_address"placeholder="Enter Address" value="<?php echo $row ['patient_address'];?>"  class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td height="41">City</td>
      <td><input name="city" type="text" id="city"placeholder="Enter Your City" value="<?php echo $row ['city'];?>"  class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td height="54">Contact Number</td>
      <td><input name="c_no" type="text" id="c_no"placeholdr="Enter Valid Contact Number" value="<?php echo $row ['contact_no'];?>"  class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td height="41">DOB</td>
      <td><input name="dob" type="date" id="dob"placeholder="Insert Date Of Birth" value="<?php echo $row ['dob'];?>"  class="validate[required,custom[date]] form-control"></td>
    </tr>
    <tr>
      <td height="40">Gender</td>
      <td><input name="gender" type="radio" value="Male"> 
      Male 
      <input name="gender" type="radio" value="Female"> 
      Female </td>
    </tr>
    <tr>
      <td>Blood Group </td>
      <td><select name="blood_group" id="blood_group">
        <option value="A">A-</option>
        <option value="A+">A+</option>
        <option value="AB">AB+</option>
        <option value="O+">O+</option>
		<option value="O+">B+</option>
		<option value="O+">B-</option>
		<option value="O+">AB-</option>
		<option value="O+">0-</option>
      </select></td>
    </tr>
    <tr>
      <td height="50">E-mail id </td>
      <td><p>
        <input name="email_id" type="text" id="email_id"placeholder="Enter Valid E-mail" value="<?php echo $row ['e_mail'];?>"  class="validate[required,custom[email]] form-control">
      </p>
      <p>&nbsp;          </p></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td>        <img src="../photo/<?php echo $row ['photo'];?>" width="100" height="100"> <input name="photo" type="file" id="photo"></td>
    </tr>
    <tr>
      <td height="74">Pincode</td>
      <td><input name="p_code" type="text" id="p_code"placeholder="Enter Valid Pincode" value="<?php echo $row ['p_code'];?>"  class="validate[required,custom[pinCode]] form-control"></td>
    </tr>
    <tr>
      <td height="66" colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-success">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
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
