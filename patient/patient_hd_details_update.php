<?php
include("db_connect.php");
$patient_health_details_id=$_POST['patient_health_details_id'];
$p_id=$_POST['p_id'];
$health_details=$_POST['health_details'];
$update_date=$_POST['update_date'];
$health_report_attachment=$_POST['health_report_attachment'];





 $sql="update  patient_health_details set patient_id='$p_id',health_details='$health_details',
updated_date='$update_date',health_report_attachment='$health_report_attachment' where patient_health_details_id='$patient_health_details_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are Updated..");
document.location="patient_hd_details_view.php";
</script>