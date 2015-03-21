<?php
	session_start();
	if(!isset($_SESSION["username"])){
	$nav = 'outer_';
	} 
	if(isset($_SESSION['username'])){
		$nav = '';
		$username = preg_replace('#[^A-Za-z0-9]#i','',$_SESSION['username']); //filter everything but numbers and letters
	}
	require_once('connect/connect.php');
	 // logging out
	if(isset($_GET['logout'])){
		unset($_SESSION['username']);
		unset($_SESSION['uid']);
		unset($_SESSION['password']);
		unset($_SESSION['email']);
		$_SESSION['success_logout'] = '';
		header('location:login.php');
		exit();
	}

?>