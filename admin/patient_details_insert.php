<?php
include("db_connect.php");
$p_full_name=$_POST['p_full_name'];
$p_address=$_POST['p_address'];
$city=$_POST['city'];
$c_no=$_POST['c_no'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood_group'];
$email_id=$_POST['email_id'];
$p_code=$_POST['p_code'];


$photo=$_FILES['photo']['name'];
$tmp_location=$_FILES['photo']['tmp_name'];
$target="../photo/".$photo;
move_uploaded_file($tmp_location,$target);



echo $sql="insert into p_details values(null,'$p_full_name','$p_address','$city','$c_no','$dob','$gender','$blood_group','$email_id','$photo','$p_code')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="patient_details_view.php";
</script>