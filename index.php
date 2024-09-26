<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	session_start();
	?>
	<form action="handleForm.php" method="POST">
		<p><input type="text" placeholder="First name here" name="firstName" required></p>
		<p><input type="password" placeholder="Password here" name="password" required></p>
		<p><input type="submit" value="Login" name="submitBtn"></p>
	</form>
	<form action="unset.php" metho="POST">
		<p><input type="submit" value="Logout" name="submitBtn"></p>
	</form>
<?php 
	if (isset($_SESSION['errorMessage'])) {
		echo $_SESSION['errorMessage'] . "</p>";
	} else {
		// Display the first user's name and password if no error message
		if (isset($_SESSION['firstName'])) {
			echo "<h2>User logged in: " . $_SESSION['firstName'] . "</h2>";
			echo "<h2>User password: " . $_SESSION['password'] . "</h2>";
		}
	}
	?>
</body>
</html>
