<?php
include("db_connect.php");
$patient_health_details_id=$_REQUEST['patient_health_details_id'];
$sql="select * from  patient_health_details where patient_health_details_id='$patient_health_details_id'";
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
        <div class="col-md-6">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title"> </h3>
            </div>
<form name="form7" id="formID" method="post" action="patient_hd_details_update.php">
<input type="hidden" name="patient_health_details_id" value="<?php echo $row['patient_health_details_id'];?>">
   <table width="381" height="353" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">PATIENT HEALTH DETAILS </div></td>
    </tr>
    <tr>
      <td width="196">Patient ID </td>
      <td width="191"><select name="p_id" id="p_id" class="validate[required]">
        <option value="">Select patient_id</option>
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
      </select>
      </td>
    </tr>
    <tr>
      <td>Health Details </td>
      <td><input name="health_details" type="text" id="health_details" value="<?php echo $row ['health_details'];?>"  class="validate[required,custom[onlyLetter]]  form-control">
      </td>
    </tr>
    <tr>
      <td>Updated Date </td>
      <td><input name="update_date" type="text" id="update_date" value="<?php echo $row ['updated_date'];?>"  class="validate[required,custom[date]]  form-control">
      </td>
    </tr>
    <tr>
      <td>Health Report Attachment</td>
      <td><input name="health_report_attachment" type="text" id="health_report_attachment" value="<?php echo $row ['health_report_attachment'];?>"  class="validate[required,custom[onlyLetter]]  form-control">
      </td>
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

