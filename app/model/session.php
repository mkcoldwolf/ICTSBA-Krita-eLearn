<?php

	require('bootstrap.php');
	session_start();

	if(!isset($_SESSION["username"])) {
		//echo $rootDir;
		header('Location: '.$rootDir.'login/');
		die();
	}

	class Session {
		
		public function getUserName() {
			return $_SESSION["username"];
		}
		
	}
	
?>