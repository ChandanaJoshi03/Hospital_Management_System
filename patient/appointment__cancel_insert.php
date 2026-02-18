<?php
include("db_connect.php");
$patient_id=$_POST['patient_id'];
$appointment_id=$_POST['appointment_id'];
$dat=$_POST['dat'];
$description=$_POST['description'];

 $sql="insert into appointment_cancel values(null,'$appointment_id','$patient_id','$description','$dat')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are cancles..");
document.location="appointment_form_view.php";
</script>