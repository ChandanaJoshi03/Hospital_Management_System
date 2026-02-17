<!--Author: W3layouts-->
<!DOCTYPE HTML>
<html lang="zxx">
<?php
include("db_connect.php");
$username = trim($_REQUEST["username"] ?? '');

// Validate username input to prevent injection or misuse
if (empty($username)) {
    echo "<script>alert('Username required'); document.location='forgot_password.php';</script>";
    exit();
}

$sql = "SELECT * FROM login WHERE binary(username) = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$res = $stmt->get_result();

if ($row = $res->fetch_assoc()) {
    $hintqtn = htmlspecialchars($row["hint_q"], ENT_QUOTES, 'UTF-8');
    $hintans = htmlspecialchars($row["hint_a"], ENT_QUOTES, 'UTF-8');
    $pwd = $row["password"]; // Plain text (consider hashing later)
} else {
    echo "<script>alert('Wrong Username'); document.location='login.php';</script>";
    exit();
}
$stmt->close();
?>
<head>
	<title>Forgot Password Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/fontawesome-all.css" />
</head>

<body>
	<h1>Hint Question :<br><?php echo $hintqtn; ?></h1>

	<div class="container">
		<div id="clouds">
			<div class="cloud x1"></div>
			<div class="cloud x2"></div>
			<div class="cloud x3"></div>
			<div class="cloud x4"></div>
			<div class="cloud x5"></div>
		</div>
		<div class="sub-main-w3">
			<form action="getpwd.php" method="post">
				<div class="form-style-agile">
					<label>
						<i class="fas fa-user"></i> Enter Hint Answer
					</label>
					<input name="type_ans" type="text" class="input-large span10" id="username" size="50" autofocus placeholder="Enter Hint Answer" required />
					<input name="db_hintans" type="hidden" id="hintans" value="<?php echo $hintans; ?>">
					<input name="password" type="hidden" id="password" value="<?php echo $pwd; ?>">
				</div>
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>
</body>
</html>