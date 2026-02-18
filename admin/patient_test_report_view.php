<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     PATIENT TESTS DETAILS
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Customer</a></li>
        <li class="active">Details</li>
      </ol>
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
            </div>
			
			<?php

$y=date('Y');
  
$month=$_POST["month"];
$year=$_POST["year"];

//$dat="%-$month-$year";
$dat="$year-$month-%";
?>

    <p>&nbsp;</p>
	<div id="printableArea">			
    <table width="200" border="0" class="table table-striped table-bordered table-hover">
      <tr>
        <td><img src="../patient/photo/mankani logo.jpeg" width="100%" height="200" ></td>
      </tr>
    </table>
  </form>
            <!-- /.box-header -->
            <div class="box-body">
			
              <table id="" class="table table-bordered table-striped">

<thead>
  <tr>
    <th width="185">Serial Number </th>
    <th width="127">Patient Full Name </th>
    <th width="185">Test Name </th>
    <th width="138">Discription</th>
    <th width="113">Test Date</th>
	
    <th width="130">Test Status</th>
	 </tr>
    </thead>
<tbody> 
  <?php
  $sl=1;
  $tal=0;
  include('db_connect.php');
  $patient_id=$_REQUEST['patient_id'];
  $sql="select * from   patient_test ap, p_details pd ,test_details td where ap.patient_id=pd.patient_id and ap.test_details_id=td.test_details_id and ap.patient_id='$patient_id'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $tal=$row ['test_rate'] + $tal;
  ?>
  <tr>
    <td><?php echo $sl++;?></td>
    <td><?php echo $row ['patient_full_name'];?></td>
    <td><?php echo $row ['test_name'];?></td>
    <td><?php echo $row ['discription'];?></td>
    <td><?php echo $row ['test_date'];?></td>
	   <td><?php echo $row ['test_status'];?></td>
	 </tr>
  <?php
  }
  ?>


</tbody>

</table>
<p align="center"><input type="button" class="btn btn-info" onclick="printDiv('printableArea')" value="print" />	</p>
</div>
      
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

