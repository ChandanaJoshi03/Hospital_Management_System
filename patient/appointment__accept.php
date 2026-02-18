<?php
include("db_connect.php");
$appointment_id=$_REQUEST['appointment_id'];



echo  $sql="update  appointment set appointment_status='Accepted' where appointment_id='$appointment_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("Appointment Accepted...");
document.location="appointment_form_view.php";
</script>