<?php
	session_start();
	
	$username = $_SESSION['username'];
	
	if(!isset($username) || $username == "") {
		echo "NOT_AUTH";
		die();
	}
	
	$date = time();
	$message = $_POST['message'];
	
	$json = file_get_contents(__DIR__."/../../.database/forum_posts.json");
	$jsonObj = json_decode($json);
	
	$jsonObj->$date = json_decode('{"username":"'.$username.'","message":"'.$message.'"}');
	
	$fp = fopen(__DIR__."/../../.database/forum_posts.json", 'w');
	
	if($fp === false) {
		echo "FILESYSTEM_PERMISSION_DENIED";
	}else {
		fwrite($fp, json_encode($jsonObj));
		fclose($fp);
	
		echo "SUCCESS";
	}
?>