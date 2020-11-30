<?php

	if(isset($_POST['username']) == "" || $_POST['pwd1']  == "" || $_POST['pwd2']  == "" || $_POST['email'] == "") {
		echo "BASIC_INFO_NOT_FILLED";
		die();
	}

	$username = $_POST['username'];	
	
	if($_POST['pwd1'] != $_POST['pwd2']) {
		echo "PASSWORD_NOT_SAME";
		die();
	}
	
	$password = $_POST['pwd2'];
	$email = $_POST['email'];

	$userFile = file_get_contents(__DIR__."/../../.database/users.json");
	$userFileObj = json_decode($userFile);
	
	$userConfigFile = file_get_contents(__DIR__."/../../.database/users_config.json");
	$userConfigObj = json_decode($userConfigFile);
	
	if(isset($userFileObj->$username)) {
		echo "ACCOUNT_ALREADY_EXIST";
		die();
	}
	
	$userFileObj->$username = md5($password);
	$userConfigObj->$username->email = $email;
	$userConfigObj->$username->user_type = "normal";
	
	$fp = fopen(__DIR__."/../../.database/users.json", 'w');
	
	if($fp === false) {
		echo "FILESYSTEM_PERMISSION_DENIED";
		die();
	}
	
	fwrite($fp, json_encode($userFileObj));
	fclose($fp);
	
	$fp = fopen(__DIR__."/../../.database/users_config.json", 'w');
	fwrite($fp, json_encode($userConfigObj));
	fclose($fp);
	
	echo "SUCCESS";
	
?>