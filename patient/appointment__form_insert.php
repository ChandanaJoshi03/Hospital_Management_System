<?php
include('db_connect.php');
$patient_id=$_POST['patient_id'];
$appointment_name=$_POST['appointment_name'];
$appointment_date=$_POST['appointment_date'];
$appointment_status=$_POST['appointment_status'];
$dob=$_POST['dob'];
 $sql="insert into appointment values(null,'$patient_id','$appointment_name','$appointment_date','Pending')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="appointment_form_view.php";
</script>