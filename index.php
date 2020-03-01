<?php
require_once "Config/dataSource.php";
require_once("./Model/orm.users.php");

if(isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$userAuth = validateUser($username, $password);

	if(isset($userAuth['success'])){
		session_start();
		$_SESSION['sUsername'] = $username;
		header("location: Controller/userProfileController.php");
	}
}

require_once "./View/indexView.php";
?>
