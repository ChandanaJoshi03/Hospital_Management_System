<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       EMPLOYEE DETAILS
      
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
              <h3 class="box-title"><a href="employee_details.php" class="btn btn-primary"> + ADD NEW EMPLOYEE</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			
              <table id="example1" class="table table-bordered table-striped">

<thead>
  <tr>
    <th width="137">Serial Number</th>
    <th width="163">Employee Name</th>
    <th width="73">Gender</th>
    <th width="52">DOB</th>
    <th width="118">Designation</th>
    <th width="112">Experience</th>
    <th width="83">Address</th>
    <th width="57">City</th>
    <th width="151">Contact Number </th>
    <th width="88">E-mail ID </th>
    <th width="41">Edit</th>
    <th width="87">Delete</th>
  </tr>
    </thead>
<tbody> 
   <?php
   $sl=1;
  include("db_connect.php");
  $sql="select * from   employee_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $sl++;?></td>
    <td><?php echo $row ['employee_name'];?></td>
    <td><?php echo $row ['gender'];?></td>
    <td><?php echo $row ['dob'];?></td>
    <td><?php echo $row ['designation'];?></td>
    <td><?php echo $row ['experience'];?></td>
    <td><?php echo $row ['address'];?></td>
    <td><?php echo $row ['city'];?></td>
    <td><?php echo $row ['contact_no'];?></td>
    <td><?php echo $row ['email_id'];?></td>
    <td><a href="employee_details_edit.php?employee_id=<?php echo $row['employee_id']; ?>" onClick="return confirm('You want To Edit');"title="Edit"><img src="icons/edit.png" width="50" height="50"></a></td>
    <td><a href="employee_details_delete.php?employee_id=<?php echo $row['employee_id']; ?>" onClick="return confirm('You want To Delete');"title="Delete"><img src="icons/delete.jpg" width="50" height="50"></a></td>
  </tr>
  <?php
  }
  ?>
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