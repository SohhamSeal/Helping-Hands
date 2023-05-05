<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
	header("Location: logout.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$EmployeeId = $_POST['EmployeeId'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE EmployeeId='$EmployeeId'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);
		if (!($count > 0)) {
			$sql = "INSERT INTO users (username, EmployeeId, password)
					VALUES ('$username', '$EmployeeId', '$password')";
			$res = mysqli_query($conn, $sql);
			echo mysqli_affected_rows($conn);
			if (mysqli_affected_rows($conn)) {
				$username = "";
				$EmployeeId = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				echo "<script>alert('Wow! User Registration Completed.'); window.location.href = 'login.php'; </script>";
			} else {
				echo mysqli_error($conn); // . "<script>alert('Woops! Something Went Wrong :/')</script>";
			}
		} else {
			echo "<script>alert('Woops! EmployeeId Already Exists. Try loggin in!')</script>";
		}
	} else {
		echo "<script>alert('Passwords do not Match!!')</script>";
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
	<title>Register Form</title>
</head>

<body>
	<div class="container">
		<div class="px-5 ms-xl-4">
			<p class="login-register-text" style="align-self: flex-end;"><a href="../index.html">&lt; Back to home</a></p>
			<video width="345" height="150" autoplay>
				<source src="../videos/video2.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Employee Id" name="EmployeeId" value="<?php echo $EmployeeId; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>

</html>