<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     PATIENT HEALTH DETAILS
      
      </h1>
     <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Customer</a></li>
        <li class="active">Details</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="patient_hd_details.php" class="btn btn-primary"> + ADD PATIENT HEALTH</a></h3>
            </div><?php

$y=date('Y');
  
$month=$_POST["month"];
$year=$_POST["year"];

//$dat="%-$month-$year";
$dat="$year-$month-%";
?>

  <form name="form1" method="post" action="patient_hd_details_view_monthwwise.php">
    <p>&nbsp;</p>
    <table width="200" border="0" class="table table-striped table-bordered table-hover">
      <tr>
        <td><strong>Select Month</strong> : </td>
        <td><select name="month" id="month" class="form-control">
          <option>Select Month</option>
          <option value="01">Jan</option>
          <option value="02">Feb</option>
          <option value="03">Mar</option>
          <option value="04">Apr</option>
          <option value="05">May</option>
          <option value="06">Jun</option>
          <option value="07">Jly</option>
          <option value="08">Aug</option>
          <option value="09">Sep</option>
          <option value="10">Oct</option>
          <option value="11">Nov</option>
          <option value="12">Dec</option>
        </select></td>
        <td><strong>&nbsp;Select Year :</strong></td>
        <td><select name="year" id="year" class="form-control">
          <option>Select Year</option>
          <?php

  for($i=2000; $i<=2030; $i++)
  {
  ?>
          <option value="<?php echo $i;?>" <?php if($y==$i) { ?> selected <?php } ?>><?php echo $i; ?></option>
          <?php
  }
  ?>
        </select></td>
        <td><input type="submit" name="Submit" value="Submit" class="btn btn-success"></td>
      </tr>
    </table>
  </form>
   
            <!-- /.box-header -->
            <div class="box-body">
			
              <table id="example1" class="table table-bordered table-striped">

<thead>
  <tr>
    <th width="284">Serial Number</th>
    <th width="118">Patient Name </th>
	 <th width="160">Blood Group</th>
    <th width="160">Health Details</th>
    <th width="152">Updated Date</th>
    <th width="277">Health Report Attachment</th>
    <th width="48">Edit</th>
    <th width="90">Delete</th>
  </tr>
      </thead>
<tbody> 
   <?php
   $sl=1;
  include("db_connect.php");
  $sql="select * from  patient_health_details ap, p_details pd where ap.patient_id=pd.patient_id and  ap.updated_date LIKE '$dat'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $sl++;?></td>
    <td><?php echo $row ['patient_full_name'];?></td>
	<td><?php echo $row ['blood_group'];?></td>
    <td><?php echo $row ['health_details'];?></td>
    <td><?php echo $row ['updated_date'];?></td>
    <td><a href="../heart_report/<?php echo $row ['health_report_attachment'];?>" class="btn btn-info">View Document</a></td>
    <td><a href="patient_hd_details_edit.php?patient_health_details_id=<?php echo $row['patient_health_details_id']; ?>" onClick="return confirm('You want To Edit');"title="Edit"><img src="icons/edit.png" width="50" height="50"></a></td>
    <td><a href="patient_hd_details_delete.php?patient_health_details_id=<?php echo $row['patient_health_details_id']; ?>" onClick="return confirm('You want To Delete');"title="Delete"><img src="icons/delete.jpg" width="50" height="50"></a></td>
  </tr>
  <?php
  }
  ?>
</table>
</tbody>
</table>
 </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php include('footer.php'); ?>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
 