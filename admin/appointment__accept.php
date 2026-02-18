<?php
include("db_connect.php");
$appointment_id=$_REQUEST['appointment_id'];

$contact_no=$_REQUEST['contact_no'];
$patient_full_name=$_REQUEST['patient_full_name'];

echo  $sql="update  appointment set appointment_status='Accepted' where appointment_id='$appointment_id' ";
mysqli_query($conn,$sql);


//$msg1=$_POST['sms'];

$msg1="Dear Customer%20".$patient_full_name."%20Your Appointment is Accepted thank you";
$msg=str_replace(' ','+', $msg1);
file_get_contents("http://trans.vwgsms.com/api/mt/SendSMS?user=smsdemo&password=emo1234&senderid=VENTUR&channel=Trans&DCS=0&flashsms=0&number=".$contact_no."&text=".$msg."&route=6");

?>
<script>
alert("Appointment Accepted...");
document.location="appointment_form_view.php";
</script>