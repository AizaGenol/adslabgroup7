<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body>
	<div style="text-align: center;">
		<h1>Sign Up</h1>
		<form action="" method="POST">
			<div style="text-align: center;">
				<label>Enter your fullname:</label>
				<input type="text" name="fullname">
			</div>
			<br>
			<div style="text-align: center;">
				<label>Username:</label>
				<input type="text" name="username">
			</div>
			<br>
			<div style="text-align: center;">
				<label>Password:</label>
				<input type="password" name="password">
			</div>
			<br>
			<div style="text-align: center;">
				<button type="submit">Save</button>
			</div>
		</form>
	</div>
</body>
</html>
<?php
	
	require("config.php");

	if (isset($_POST['fullname'])) {
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = hash('md5',$_POST['password']);
		
		$saveUser = new User($conn);
		if ($saveUser->sports($fullname, $username,$password)) {
			echo "<script>alert('Successfully added!')</script>";
		}
	}
	
?>