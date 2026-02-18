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
 <?php
  $sl=1;
  include("db_connect.php");
  $username=$_SESSION['username'];
  $patient_test_id=$_REQUEST['patient_test_id'];
  $sql="select * from   patient_test ap, p_details pd ,test_details td where ap.patient_id=pd.patient_id and ap.test_details_id=td.test_details_id  and pd.contact_no='$username'and ap.patient_test_id='$patient_test_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
   $tal=$row ['test_rate'] + $tal;

  ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><!-- <a href="patient_tests.php" class="btn btn-primary"> + ADD NEW TESTS</a> --></h3>
            </div>
			<div id="printableArea">
<table width="200" border="0" class="table table-striped table-bordered table-hover">
  <tr>
    <td>Date : <?php echo $row ['test_date'];?> </td>
    <td colspan="3" align="center">&nbsp;<img src="photo/Sun-Diagnostics.jpg" ></td>
    <td>Bill Number : <?php echo $row['patient_test_id']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">Patient Full Name : &nbsp;<?php echo $row ['patient_full_name'];?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Sl.No</td>
    <td>Test Name</td>
    <td>Rate</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;1</td>
    <td>&nbsp;<?php echo $row ['test_name'];?></td>
    <td>&nbsp;<?php echo $row ['test_rate'];?></td>
    <td><?php echo $row ['test_rate'];?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Total :</td>
    <td colspan="2"><?php echo $tal;	 ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><b>Description :</b> <?php echo $row['test_discription']; ?></td>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
</div>
<p align="center"><input type="button" class="btn btn-info" onclick="printDiv('printableArea')" value="print" />	</p>
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
