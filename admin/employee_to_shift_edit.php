<?php
include("db_connect.php");
$employee_shift_id=$_REQUEST['employee_shift_id'];
$sql="select * from  employee_shift_details where employee_shift_id='$employee_shift_id'";
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
    EMPLOYEE TO SHIFT</h1>
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
<form name="form1" id="formID" method="post" action="employee_to_shift_update.php">

<input type="hidden" name="employee_shift_id" value="<?php echo $row['employee_shift_id'];?>">
  <table width="566" height="191" border="0" align="center">
    <tr>
      <td width="176">Employee ID </td>
      <td width="213"><select name="employee_id" id="employee_id" class="validate[required]  form-control">
      <option value="">Select</option>
          <?php
	  $sql2="select * from employee_details";
	  $res2=mysqli_query($conn,$sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	  ?>
          <option value="<?php echo $row2['employee_id'];?>"<?php if($row2['employee_id']==$row['employee_id']) { ?> selected <?php } ?>> <?php echo $row2['employee_name'];?></option>
       <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Shift Name</td>
      <td><h4>
        <select name="shift_id" id="shift_id"class="validate[required]  form-control" >
          <option value="">Select TEST ID</option>
          <?php
	  
	  $sql3="select * from shift_id";
	  $res3=mysqli_query($conn,$sql3);
	  while($row3=mysqli_fetch_array($res3))
	  {
	  ?>
          <option value="<?php echo $row3['shift_id'];?>" <?php if ($row3['shift_id']==$row['shift_id']) {?> selected<?php } ?>> <?php echo $row3['shift_name'];?></option>
      <?php
	  }
	  ?>
        </select>
</td>
    </tr>
    <tr>
      <td height="57" colspan="2"><div align="center">
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
