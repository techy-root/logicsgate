<?php
require_once "../Config/dataSource.php";

if(isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$userAuth = validateUser($username, $password);

	if(isset($userAuth['success'])){
		header("location: userProfileController.php");
	}
}

require_once "../View/forgotPasswordView.php";
?>
