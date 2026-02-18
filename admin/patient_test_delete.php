<?php
include("db_connect.php");
$patient_test_id=$_REQUEST['patient_test_id'];
$sql="delete from   patient_test where patient_test_id='$patient_test_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert('Values are Deleted..');
document.location="patient_test_view.php";
</script>