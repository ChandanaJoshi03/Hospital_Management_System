<?php
include("db_connect.php");
$employee_shift_id=$_POST['employee_shift_id'];
$employee_id=$_POST['employee_id'];
$shift_id=$_POST['shift_id'];


$employee_shift_id=$_POST['employee_shift_id'];


 $sql="update  employee_shift_details set 	employee_id='$employee_id',shift_id='$shift_id' where employee_shift_id='$employee_shift_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are Updated..");
document.location="employee_to_shift _view.php";
</script>