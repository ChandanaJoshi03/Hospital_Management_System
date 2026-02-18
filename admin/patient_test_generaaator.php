<?php
include('db_connect.php');
$patient_test_id=$_REQUEST['patient_test_id'];






 $sql="update  patient_test set test_status='Approved' where patient_test_id='$patient_test_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are Updated..");
document.location="patient_test_view.php";
</script>