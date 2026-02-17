<?php
include("db_connect.php");

// Validate and sanitize the term
$term = trim($_GET['term'] ?? '');
if (empty($term) || strlen($term) > 50) { // Basic length check
    echo ''; // Return empty if invalid
    exit();
}

// Use prepared statement to prevent SQL injection
$sql = "SELECT city_name FROM cities 
        WHERE LOWER(city_name) LIKE LOWER(?) 
        ORDER BY city_name 
        LIMIT 5";

$stmt = mysqli_prepare($conn, $sql);
$searchTerm = $term . '%';
mysqli_stmt_bind_param($stmt, 's', $searchTerm);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!$result) {
    error_log("Database query failed in cities.php: " . mysqli_error($conn));
    echo '';
    exit();
}

while ($row = mysqli_fetch_assoc($result)) {
    $city = htmlspecialchars($row['city_name'], ENT_QUOTES, 'UTF-8');
    echo "<option value='$city'>";
}

mysqli_stmt_close($stmt);
?>