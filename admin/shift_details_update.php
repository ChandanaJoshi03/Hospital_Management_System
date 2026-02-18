<?php
include('db_connect.php');
$shift_id=$_POST['shift_id'];
$shift_name=$_POST['shift_name'];


$shift_id=$_POST['shift_id'];


 $sql="update shift_id set 	shift_name='$shift_name' where shift_id='$shift_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are Updated..");
document.location="shift_details_view.php";
</script>