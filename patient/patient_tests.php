<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
  <?php include('cal.php'); ?>
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
        <div class="col-md-12">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title"> </h3>
            </div>
			<form name="form1" id="formID" method="post" action="patient_test_insert.php" >
      <input type="hidden" name="patient_test_id" value="<?php echo $row['patient_test_id'];?>">

  <table width="365" height="382" border="0" align="center">
    <tr>
      <td>Patient_id</td>
      <td><select name="patient_id" id="patient_id" class="validate[required] form-control">
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
      <td width="129">Test Name </td>
      <td width="176"><select name="test_details_id" id="test_details_id" class="validate[required] form-control">
	  <option value="">Select TEST ID</option>
        <?php
	  include('db_connect.php');
	  $sql1="select * from test_details";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['test_details_id'];?>"> <?php echo $row1['test_name'];?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Discription</td>
      <td><textarea name="discription" class="validate[required,custom[onlyLetter]] form-control" id="discription"></textarea></td>
    </tr>
    <tr>
      <td>Test Date</td>
      <td><input name="test_date" type="text" value="<?php echo date('Y-m-d'); ?>" class="validate[required,custom[date]] form-control"></td>
    </tr>
   <!-- <tr>
      <td>Test Status </td>
      <td><input name="test_status" type="text" id="test_status" class="validate[required,custom[onlyLetter]] form-control"></td>
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

