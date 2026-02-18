<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login/login.php");
    exit();
}
include("db_connect.php");
$username = $_SESSION['username'];
$sql = "SELECT patient_full_name FROM p_details WHERE contact_no = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>Welcome to <?php echo htmlspecialchars($row['patient_full_name'] ?? 'Patient'); ?></h1>
    </section>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <img src="photo/mankani logo.jpeg" width="100%">
</div>

<?php include('footer.php'); ?>
<?php include('script.php'); ?>