<?php
include("db_connect.php");

$patient_id=$_POST['patient_id'];
$patient_full_name=$_POST['p_full_name'];
$patient_address=$_POST['p_address'];
$city=$_POST['city'];
$contact_no=$_POST['c_no'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood_group'];
$e_mail=$_POST['email_id'];
$photo=$_FILES['photo']['name'];
$tmp_location=$_FILES['photo']['tmp_name'];
$target="../photo/".$photo;
move_uploaded_file($tmp_location,$target);


$p_code=$_POST['p_code'];


$patient_id=$_POST['patient_id'];

if(empty($photo))
{ 
$sql="update  p_details set patient_full_name='$patient_full_name',patient_address='$patient_address', city='$city',contact_no='$contact_no',dob='$dob',gender='$gender',blood_group='$blood_group',e_mail='$e_mail',p_code='$p_code' where patient_id='$patient_id'";
mysqli_query($conn,$sql);
}
else
{
 $sql="update  p_details set patient_full_name='$patient_full_name',patient_address='$patient_address', city='$city',contact_no='$contact_no',dob='$dob',gender='$gender',blood_group='$blood_group',e_mail='$e_mail',photo='$photo',p_code='$p_code' where patient_id='$patient_id'";
mysqli_query($conn,$sql);
}


?>
<script>
alert("values are Updated..");
document.location="patient_details_edit.php";
</script>