<?php
include('db_connect.php');
$test_details_id=$_REQUEST['test_details_id'];
$sql="select * from test_details where test_details_id='$test_details_id'";
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
   TEST DETAILS </h1>
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
<form name="form1" id="formID" method="post" action="test_details_update.php">
<form name="form1" method="post" action="">
  <input type="hidden" name="test_details_id" value="<?php echo $row['test_details_id'];?>">
   <table width="385" height="375" border="0" align="center">
    
    <tr>
      <td width="175">Test Name </td>
      <td width="137"><input name="test_name" type="text" id="test_name" value="<?php echo $row ['test_name'];?>" class="validate[required,custom[onlyLetter]]  form-control"></td>
    </tr>
    <tr>
      <td>Test Discription </td>
      <td><input name="test_discription" type="text" id="test_discription" value="<?php echo $row ['test_discription'];?>" class="validate[required,custom[onlyLetter]]  form-control"></td>
    </tr>
    <tr>
      <td>Test Rate </td>
      <td><input name="test_rate" type="text" id="test_rate" value="<?php echo $row ['test_rate'];?>" class="validate[required,custom[onlyNumber]]  form-control"></td>
    </tr>
    <tr>
      <td>Test Duration (Hr:Min:Sec) </td>
      <td><input name="test_duration" type="text" id="test_duration" value="<?php echo $row ['test_duration'];?>" class="validate[required,custom[onlyNumber]]  form-control"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="SUBMIT"  class="btn btn-success">
          <input type="reset" name="Reset" value="RESET"  class="btn btn-danger">
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
