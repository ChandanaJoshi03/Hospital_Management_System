<?php
include("db_connect.php");
$patient_test_id=$_POST['patient_test_id'];
$patient_id=$_POST['patient_id'];
$test_details_id=$_POST['test_details_id'];
$discription=$_POST['discription'];
$test_date=$_POST['test_date'];
$experience=$_POST['test_status'];


$patient_test_id=$_POST['patient_test_id'];


 $sql="update  employee_details set patient_id='$patient_id',test_details_id='$test_details_id',
discription='$discription',test_date='$test_date',test_status='$test_status' where patient_test_id='$patient_test_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are Updated..");
document.location="patient_test_view.php";
</script>