<?php
include("db_connect.php");
$employee_name=$_POST['employee_name'];
$gender=$_POST['gender'];
$DOB=$_POST['DOB'];
$designation=$_POST['designation'];
$experience=$_POST['experience'];
$address=$_POST['address'];
$city=$_POST['city'];
$contact_no=$_POST['contact_no'];
$email_ID=$_POST['email_ID'];

$sql="insert into employee_details values(null,'$employee_name','$gender','$DOB','$designation','$experience','$address','$city','$contact_no','$email_ID')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="employee_details_view.php";
</script>