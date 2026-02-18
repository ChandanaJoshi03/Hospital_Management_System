<?php
include("db_connect.php");
$test_details_id=$_REQUEST['test_details_id'];
$sql="delete from test_details where test_details_id='$test_details_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert('Values are Deleted..');
document.location="test_details_view.php";
</script>