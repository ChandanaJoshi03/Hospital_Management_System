<?php
session_start();

// Access control: redirect if not logged in or not admin
if (!isset($_SESSION['login_id']) || $_SESSION['type'] !== 'admin') {
    header("Location: ../login/login.php"); 
    exit();
}

$username = $_SESSION['username']; // Use the same session key used at login
?>

<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Welcome to Admin (<?php echo htmlspecialchars($username); ?>)
            <!-- <small>Control panel</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Admin</li>
        </ol>
    </section>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <img src="photo/logo hm.jpeg" width="100%">
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>
<?php include('script.php'); ?>