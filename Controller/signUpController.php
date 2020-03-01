<?php
require_once "../Config/dataSource.php";
require_once("../Model/orm.users.php");

if(!empty($_POST['username']) && !empty($_POST['password'])
    AND !empty($_POST['mobile']) && !empty($_POST['email'])
	){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$contact = $_POST['mobile'];
	$address = $_POST['address'];
	$email = $_POST['email'];

	$userAuth = validateUserName($username);

	if(isset($userAuth) && (empty($userAuth['error']))){
		//echo $userAuth['success'];
		//SignUp process
		$userAuth = signUpProcess(array(
			'username'=>$username, 'password'=>$password, 
			'contact'=>$contact, 'address'=>$address, 'email'=>$email));
	}
} else{
	$userAuth['error'] = "username, password, contact and email are required!";
}

require_once "../View/signUpView.php";
?>