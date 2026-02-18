<?php
include("db_connect.php");
$shift_id=$_REQUEST['shift_id'];
$sql="delete from  shift_id where shift_id='$shift_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert('Values are Deleted..');
document.location="shift_details_view.php";
</script>