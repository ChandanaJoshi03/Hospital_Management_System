 <?php
include("db_connect.php");

$patient_id=$_POST['patient_id'];
$appointment_name=$_POST['appointment_name'];
$appointment_date=$_POST['appointment_date'];
$appointment_status=$_POST['appointment_status'];

$appointment_id=$_POST['appointment_id'];


 $sql="update appointment set 	patient_id='$patient_id',appointment_name='$appointment_name',appointment_date='$appointment_date',
 appointment_status='$appointment_status' where appointment_id='$appointment_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are Updated..");
document.location="appointment_form_view.php";
</script>