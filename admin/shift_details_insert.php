<?php
include("db_connect.php");
$shift_name=$_POST['shift_name'];

$sql="insert into shift_id values(null,'$shift_name')";
mysqli_query($conn,$sql);
?>

<script>
alert("values are inserted..");
document.location="shift_details_view.php";
</script>

