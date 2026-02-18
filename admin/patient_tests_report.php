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
			<form name="form1" id="formID" method="post" action="patient_test_report_view.php" >
     
  <table width="365" height="382" border="0" align="center">
    <tr>
      <td>Patient Name</td>
      <td><select name="patient_id" id="patient_id" class="validate[required] form-control">
        <option value="">Select Patient</option>
        <?php
	  include("db_connect.php");
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

