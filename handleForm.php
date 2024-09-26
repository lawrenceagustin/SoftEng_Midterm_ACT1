<?php 
session_start();
if (isset($_POST['submitBtn'])) {
	$firstName = $_POST['firstName'];
	$password = md5($_POST['password']);
	if (isset($_SESSION['firstUser']) && $_SESSION['firstUser'] !== $firstName) {
		$_SESSION['errorMessage'] = $_SESSION['firstUser'] . " is already logged in. Please wait until they log out.";
		unset($_SESSION['firstName']);
		unset($_SESSION['password']);
	} else {
		$_SESSION['firstName'] = $firstName;
		$_SESSION['password'] = $password;
		if (!isset($_SESSION['firstUser'])) {
			$_SESSION['firstUser'] = $firstName;
		}
		unset($_SESSION['errorMessage']);
	}
	header('Location: index.php');
	exit();
}
?>
