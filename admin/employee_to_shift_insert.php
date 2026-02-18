<?php
include('db_connect.php');
$employee_id=$_POST['employee_id'];
$shift_id=$_POST['shift_id'];

$sql="insert into employee_shift_details values(null,'$employee_id','$shift_id')";
mysqli_query($conn,$sql);
?>

<script>
alert("values are inserted..");
document.location="employee_to_shift _view.php";
</script>

