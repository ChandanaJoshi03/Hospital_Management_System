<?php
include('db_connect.php');
$test_details_id=$_POST['test_details_id'];
$test_name=$_POST['test_name'];
$test_discription=$_POST['test_discription'];
$test_rate=$_POST['test_rate'];
$test_duration=$_POST['test_duration'];

 $sql="update test_details set test_name='$test_name',test_discription='$test_discription',test_rate='$test_rate',
test_duration='$test_duration' where test_details_id='$test_details_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are Updated..");
document.location="test_details_view.php";
</script>