<?php
include("db_connect.php");

$appointment_id=$_REQUEST['appointment_id'];
$sql="delete from appointment where appointment_id='$appointment_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert('Values are Deleted..');
document.location="appointment_form_view.php";
</script>