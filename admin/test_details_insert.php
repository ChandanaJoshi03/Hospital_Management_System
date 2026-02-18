<?php
include("db_connect.php");
$test_name=$_POST['test_name'];
$test_discription=$_POST['test_discription'];
$test_rate=$_POST['test_rate'];
$test_duration=$_POST['test_duration'];


$sql="insert into test_details values(null,'$test_name','$test_discription','$test_rate','$test_duration')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="test_details_view.php";
</script>