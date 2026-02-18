<?php
include("db_connect.php");
$patient_id=$_REQUEST['patient_id'];
$sql="delete from  p_details where patient_id='$patient_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert('Values are Deleted..');
document.location="patient_details_view.php";
</script>