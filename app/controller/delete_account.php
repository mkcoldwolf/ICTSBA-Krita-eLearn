<?php
	session_start();

	$username = $_SESSION['username'];
	
	if(!isset($username) || $username == "") {
		echo "NOT_AUTH";
		die();
	}

	$userFile = file_get_contents(__DIR__."/../../.database/users.json");
	$userFileObj = json_decode($userFile);
	
	$userConfigFile = file_get_contents(__DIR__."/../../.database/users_config.json");
	$userConfigObj = json_decode($userConfigFile);
	
	if(!isset($userFileObj->$username)) {
		echo "ACCOUNT_NOT_EXIST";
		die();
	}
	
	unset($userFileObj->$username);
	unset($userConfigObj->$username);
	
	$fp = fopen(__DIR__."/../../.database/users.json", 'w');
	
	if($fp === false) {
		echo "FILESYSTEM_PERMISSION_DENIED";
		die();
	}
	
	//Log user out
	unset($_SESSION['username']);
	
	fwrite($fp, json_encode($userFileObj));
	fclose($fp);
	
	$fp = fopen(__DIR__."/../../.database/users_config.json", 'w');
	fwrite($fp, json_encode($userConfigObj));
	fclose($fp);
	
	echo "SUCCESS";
	
?>