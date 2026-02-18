<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Patient Health Details</title>
</head>
<body>
<?php
include("db_connect.php");
$p_id=$_POST['p_id'];
$health_details=$_POST['health_details'];
$update_date=$_POST['update_date'];
//$health_report_attachment=$_POST['health_report_attachment'];




$health_report_attachment=$_FILES['health_report_attachment']['name'];
$tmp_location=$_FILES['health_report_attachment']['tmp_name'];
$target="../heart_report/".$health_report_attachment;
move_uploaded_file($tmp_location,$target);



$sql="insert into patient_health_details values(null,'$p_id','$health_details','$update_date','$health_report_attachment')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="patient_hd_details_view.php";
</script>
</body>
</html>
