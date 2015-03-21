<?php 
session_start();
if(!isset($_SESSION["manager"])){
	header('location: admin_login.php');
	exit();
}

if(isset($_GET['logout'])){
	unset($_SESSION['manager']);
	unset($_SESSION['id']);
	unset($_SESSION['password']);
		$_SESSION['success_logout'] = 'success_logout';
	header('location:index.php');
	exit();
}

// Be sure to check that this manager SESSION value is in fact in the database
// Connect to the MySQL database
require_once('../connect/connect.php');
$managerID = preg_replace('#[^0-9]#i','',$_SESSION['id']); //filter everything but numbers and letters
$manager = preg_replace('#[^A-Za-z0-9]#i','',$_SESSION['manager']); //filter everything but numbers and letters
$password = $_SESSION['password']; //filter everything but numbers and letters
// Run MySQL query to be sure that this person is an admin and that their password session var equals the database information
$sql = mysql_query('SELECT * FROM users WHERE id="'.$managerID.'" AND username="'.$manager.'" LIMIT 1'); //query the data
$existCount = mysql_num_rows($sql);
if($existCount == 0) { // evaluate the count
	echo 'Your login session data is not on record in the database';
	session_destroy();
	header('location:index.php');
	exit();
	} 
?>