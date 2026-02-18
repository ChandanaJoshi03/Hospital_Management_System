<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
   SHIFT DETAILS  </h1>
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
<form name="form1" id="formID" method="post" action="shift_details_insert.php">
     <table width="332" height="194" border="0" align="center">

   
    <tr>
      <td width="168">Shift Name </td>
      <td width="175"><input name="shift_name" type="text" id="shift_name" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="SUBMIT"  class="btn btn-success">
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

