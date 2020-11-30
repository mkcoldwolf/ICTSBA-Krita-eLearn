<?php
	require('./../app/model/bootstrap.php');
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(!isset($username) || $username == '') {
		echo "NULL_USERNAME";
		die();
	}
	
	if(!isset($password) || $password == '') {
		echo "NULL_PASSWORD";
		die();
	}
	
	$json = file_get_contents("./../.database/users.json");
	$jsonObj = json_decode($json, true);
	if(isset($jsonObj[$username])) {
		if($jsonObj[$username] == md5($password)) {
			$_SESSION['username'] = $username;
			echo "LOGIN_SUCCESS";
		}else{ 
			echo "ACC_OR_PASS_INCORRECT";
		}
	}else {
		echo "ACC_NOT_EXIST";
	}
	
?>