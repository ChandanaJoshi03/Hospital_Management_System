<?php
session_start();
include("db_connect.php");

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if (empty($username) || empty($password)) {
    echo "<script>alert('Please enter both username and password.'); window.history.back();</script>";
    exit();
}

// No hashing since passwords are plain text in your DB
$hashed_password = $password;

$stmt = $conn->prepare("SELECT login_id, username, type FROM login WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $hashed_password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    $_SESSION['login_id'] = $user['login_id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['type'] = $user['type'];

    if ($user['type'] === 'admin') {
        header("Location: ../admin/home.php");
    } elseif ($user['type'] === 'patient') {
        header("Location: ../patient/home.php");
    }
    exit();
} else {
    $stmt2 = $conn->prepare("SELECT * FROM login WHERE username = ?");
    $stmt2->bind_param("s", $username);
    $stmt2->execute();
    $result2 = $stmt2->get_result();

    if ($result2->num_rows === 0) {
        echo "<script>alert('Username not found in the database.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Password mismatch for this username.'); window.history.back();</script>";
    }
    exit();
}
?>