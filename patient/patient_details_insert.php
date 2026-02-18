<?php
include("db_connect.php");

// Sanitize input function
function sanitize($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

$p_full_name = sanitize($_POST['p_full_name'] ?? '');
$p_address = sanitize($_POST['p_address'] ?? '');
$city = sanitize($_POST['city'] ?? '');
$c_no = sanitize($_POST['c_no'] ?? '');
$dob = sanitize($_POST['dob'] ?? '');
$gender = sanitize($_POST['gender'] ?? '');
$blood_group = sanitize($_POST['blood_group'] ?? '');
$email_id = sanitize($_POST['email_id'] ?? '');
$p_code = sanitize($_POST['p_code'] ?? '');

// Handle photo upload
$photo = '';
if (isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array(strtolower($ext), $allowed_ext)) {
        echo "<script>alert('Invalid photo format. Allowed: jpg, jpeg, png, gif.'); history.back();</script>";
        exit();
    }

    $photoName = uniqid('photo_') . '.' . $ext;
    $uploadDir = "../photo/"; // adjust path accordingly
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    $uploadPath = $uploadDir . $photoName;

    if (!move_uploaded_file($_FILES['photo']['tmp_name'], $uploadPath)) {
        echo "<script>alert('Photo upload failed.'); history.back();</script>";
        exit();
    }
    $photo = $photoName;
} else {
    echo "<script>alert('Photo is required.'); history.back();</script>";
    exit();
}

// Check for duplicates to avoid error adding UNIQUE constraints later
$stmt = $conn->prepare("SELECT 1 FROM p_details WHERE contact_no = ? OR email_id = ?");
$stmt->bind_param("ss", $c_no, $email_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Mobile number or Email already registered.'); history.back();</script>";
    exit();
}
$stmt->close();

// Prepare insert statement with parameter binding
$stmt = $conn->prepare("INSERT INTO p_details (patient_full_name, patient_address, city, contact_no, dob, gender, blood_group, email_id, photo, p_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("ssssssssss", $p_full_name, $p_address, $city, $c_no, $dob, $gender, $blood_group, $email_id, $photo, $p_code);

if (!$stmt->execute()) {
    echo "<script>alert('Error inserting data, please try again.'); history.back();</script>";
    $stmt->close();
    exit();
}

$stmt->close();

echo "<script>alert('Values are inserted successfully.'); document.location='patient_details_view.php';</script>";
exit();
?>