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
        <div class="col-md-12">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title"> </h3>
            </div>
<form name="form1" id="formID" method="post" action="employee_to_shift_insert.php">
  <table width="566" height="191" border="0" align="center">
  
    <tr>
      <td width="176" height="58">Employee Name </td>
      <td width="203"><select name="employee_id" id="employee_id" class="validate[required] form-control">
	   <option value="">Select Employee</option>
        <?php
	  include("db_connect.php");
	  $sql="select * from employee_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
        <option value="<?php echo $row['employee_id'];?>"> <?php echo $row['employee_name'];?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td height="68">Assing Shift Name </td>
      <td><h4>
        <select name="shift_id" id="shift_id"  class="validate[required] form-control">
		<option value="">Select Shift</option>
        <?php
	  include('db_connect.php');
	  $sql1="select * from shift_id";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['shift_id'];?>"> <?php echo $row1['shift_name'];?></option>
        <?php
	  }
	  ?>
        </select>
</h4></td>
    </tr>
    <tr>
      <td height="57" colspan="2"><div align="center">
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
