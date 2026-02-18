<?php
include('db_connect.php');
$employee_id=$_POST['employee_id'];
$employee_name=$_POST['employee_name'];
$gender=$_POST['gender'];
$dob=$_POST['DOB'];
$designation=$_POST['designation'];
$experience=$_POST['experience'];
$address=$_POST['address'];
$city=$_POST['city'];
$contact_no=$_POST['contact_no'];
$email_ID=$_POST['email_ID'];



 $sql="update  employee_details set employee_name='$employee_name',gender='$gender',
 dob='$dob',designation='$designation',experience='$experience',address='$address',city='$city',contact_no='$contact_no',email_id='$email_ID' where employee_id='$employee_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are Updated..");
document.location="employee_details_view.php";
</script>