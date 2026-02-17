<?php
include("db_connect.php");

function sanitize($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

$p_full_name = sanitize($_POST['patient_full_name'] ?? '');
$p_address = sanitize($_POST['patient_address'] ?? '');
$city = sanitize($_POST['city'] ?? '');
$c_no = sanitize($_POST['contact_no'] ?? '');
$dob = sanitize($_POST['dob'] ?? '');
$gender = sanitize($_POST['gender'] ?? '');
$blood_group = sanitize($_POST['blood_group'] ?? '');
$email_id = sanitize($_POST['email_id'] ?? '');
$p_code = sanitize($_POST['p_code'] ?? '');
$password = $_POST['password'] ?? '';

// For password hashing, uncomment below and update login insert accordingly
//$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Handle photo upload if provided
$photo = '';
if (isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    $photoName = uniqid('photo_', true) . "." . $ext;
    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    $uploadFile = $uploadDir . basename($photoName);
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
        $photo = $photoName;
    }
}

// Check duplicate contact_no
$stmt = $conn->prepare("SELECT * FROM p_details WHERE contact_no = ?");
$stmt->bind_param("s", $c_no);
$stmt->execute();
if ($stmt->get_result()->num_rows > 0) {
    echo "<script>alert('Mobile number already registered.'); history.back();</script>";
    $stmt->close();
    exit();
}
$stmt->close();

// Check duplicate email
$stmt = $conn->prepare("SELECT * FROM p_details WHERE email_id = ?");
$stmt->bind_param("s", $email_id);
$stmt->execute();
if ($stmt->get_result()->num_rows > 0) {
    echo "<script>alert('Email already registered.'); history.back();</script>";
    $stmt->close();
    exit();
}
$stmt->close();

// Insert into p_details
$stmt = $conn->prepare("INSERT INTO p_details 
(patient_full_name, patient_address, city, contact_no, dob, gender, blood_group, email_id, photo, p_code)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $p_full_name, $p_address, $city, $c_no, $dob, $gender, $blood_group, $email_id, $photo, $p_code);

if (!$stmt->execute()) {
    echo "<script>alert('Error registering patient. Please try again.'); history.back();</script>";
    $stmt->close();
    exit();
}
$stmt->close();

// Insert into login table (plain text password to match existing, consider hashing)
$stmt = $conn->prepare("INSERT INTO login (username, password, type, hint_q, hint_a, status) VALUES (?, ?, 'patient', 'Enter Register Email address', ?, 'Active')");
$stmt->bind_param("sss", $c_no, $password, $email_id);

if (!$stmt->execute()) {
    echo "<script>alert('Error creating user login. Please try again.'); history.back();</script>";
    $stmt->close();
    exit();
}
$stmt->close();

echo "<script>alert('Registration successful! Please log in.'); window.location='login.php';</script>";
exit();
?>