<?php
session_start();
include("db_connect.php"); 

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($username) || empty($password)) {
    echo "<script>alert('Please enter both username and password.'); window.history.back();</script>";
    exit();
}

$hashed_password = $password;

$stmt = $conn->prepare("SELECT login_id, email_id, type FROM reg_details WHERE email_id = ? AND password = ?");
$stmt->bind_param("ss", $username, $hashed_password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    // Set session variables
    $_SESSION['login_id'] = $row['login_id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['type'] = $row['admin']; // Make sure this value is 'admin' for admin users

    // Redirect to admin dashboard
    header("Location:../admin/home.php");
    exit();
} else {
    echo "<script>alert('Invalid Username or Password'); window.history.back();</script>";
    exit();
}
?>