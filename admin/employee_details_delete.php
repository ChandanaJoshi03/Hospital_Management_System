<?php
include("db_connect.php");
$employee_id=$_REQUEST['employee_id'];
$sql="delete from  employee_details where employee_id='$employee_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert('Values are Deleted..');
document.location="employee_details_view.php";
</script>