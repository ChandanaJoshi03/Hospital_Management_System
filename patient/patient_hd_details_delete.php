<?php
include("db_connect.php");
$patient_health_details_id=$_REQUEST['patient_health_details_id'];
$sql="delete from  patient_health_details where patient_health_details_id='$patient_health_details_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert('Values are Deleted..');
document.location="patient_hd_details_view.php";
</script>