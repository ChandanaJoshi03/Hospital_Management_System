<?php
include("db_connect.php");
$p_id=$_POST['patient_id'];
$test_details_id=$_POST['test_details_id'];
$discription=$_POST['discription'];
$date=$_POST['test_date'];
$t_status=$_POST['test_status'];

$sql="insert into patient_test values(null,'$p_id','$test_details_id','$discription','$date','Pending')";
mysqli_query($conn,$sql);
?>

<script>
alert("values are inserted..");
document.location="patient_test_view.php";
</script>

