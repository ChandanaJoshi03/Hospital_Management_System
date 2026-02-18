<?php
include("db_connect.php");
$patient_test_id=$_REQUEST['patient_test_id'];
$sql="select * from  patient_test where patient_test_id='$patient_test_id'";
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
   PATIENT TESTS </h1>
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
<form name="form1" method="post" action="patient_test_update.php">
<input type="hidden" name="patient_test_id" value="<?php echo $row['patient_test_id'];?>">

  <table width="365" height="382" border="0" align="center">
    
    <tr>
      <td>Patient_id</td>
      <td><select name="patient_id" id="patient_id">
        <option value="">Select employee id</option>
        <?php
	  $sql1="select * from p_details";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['patient_id'];?>"<?php if($row['patient_id']==$row['patient_id']) { ?> selected <?php } ?>> <?php echo $row1['patient_id'];?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td width="129">Test  Name </td>
      <td width="183"><select name="test_details_id" id="test_details_id">
        <option value="">Select TEST ID</option>
        <?php
	  include("db_connect.php");
	  $sql1="select * from test_details";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['test_details_id'];?>" <?php if ($row1['test_details_id']==$row['test_details_id']) {?> selected<?php } ?>> <?php echo $row1['test_name'];?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Discription</td>
      <td><input name="discription" type="text" id="discription" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td>Test Date</td>
      <td><input name="test_date" type="text" id="test_date"  class="validate[required,custom[date]] form-control"></td>
    </tr>
    <tr>
      <td>Test Status </td>
      <td><input name="test_status" type="text" id="test_status" class="validate[required,custom[onlyLetter]] form-control"></td>
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
