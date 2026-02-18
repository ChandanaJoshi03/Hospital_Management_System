<?php
include('db_connect.php');
$employee_shift_id=$_REQUEST['employee_shift_id'];
$sql="delete from  employee_shift_details where employee_shift_id='$employee_shift_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert('Values are Deleted..');
document.location="employee_to_shift_view.php";
</script>