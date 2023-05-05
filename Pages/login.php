<?php

session_start();
include 'config.php';
session_unset();
error_reporting(0);

if (isset($_SESSION['username'])) {
	header("Location: Landing.php");
}

if (isset($_POST['submit'])) {
	$EmployeeId = $_POST['EmployeeId'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE EmployeeId='$EmployeeId' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		$_SESSION['emp_id'] = $EmployeeId;
		header("Location: Landing.php");
	} else {
		echo "<script>alert('Oops! EmployeeId or Password is Wrong.')</script>";
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Login Form</title>
</head>

<body>
	<div class="container">
		<div class="px-5 ms-xl-4">
			<p class="login-register-text" style="align-self: flex-end;"><a href="../index.html">&lt; Back to home</a></p>
			<video width="345" height="240" autoplay>
				<source src="../videos/video1.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="text" placeholder="Employee Id" name="EmployeeId" value="<?php echo $EmployeeId; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>

		</form>
	</div>
</body>

</html>