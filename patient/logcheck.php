<?php


$username=$_POST['username'];
$password=$_POST['password'];
$pwd=md5($password);


 $sql="select * from reg_details where email_id='$username' and password='".md5($pwd)."'";
//echo  $sql="select * from login where username='$username' and password='".md5($password)."'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
?>
<script>
document.location="customer_details_view.php";
</script>
<?php
}
else
{
?>
<script>
alert("Invalid Username Or Password");
//history.back();
</script>
<?php
}
?>