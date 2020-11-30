<?php
	require('./app/model/bootstrap.php');
	session_start();
	
	unset($_SESSION['username']);
	header('Location: '.$rootDir.'login');
?>