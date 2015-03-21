<?php // check if user is logged in or else
session_start();
if(!isset($_SESSION["username"])){
	header('location: login.php');
	exit();
}
 // logging out
if(isset($_GET['logout'])){
	unset($_SESSION['username']);
	unset($_SESSION['uid']);
	unset($_SESSION['password']);
	unset($_SESSION['email']);
	$_SESSION['success_logout'] = 'success_logout';
	header('location:login.php');
	exit();
}

	

// Be sure to check that this manager SESSION value is in fact in the database
$uid = preg_replace('#[^0-9]#i','',$_SESSION['uid']); //filter everything but numbers
$username = preg_replace('#[^A-Za-z0-9]#i','',$_SESSION['username']); //filter everything but numbers and letters
$password = $_SESSION['password']; //filter everything but numbers and letters

$email = $_SESSION['email'];
// Run MySQL query to be sure that this person is an admin and that their password session var equals the database information
// Connect to the MySQL database
require_once('connect/connect.php');
$sql = mysql_query('SELECT * FROM users WHERE id ='.$uid.' AND username ="'.$username.'" LIMIT 1') or die(mysql_error()); //query the data
$existCount = mysql_num_rows($sql);
if($existCount == 0) { // evaluate the count
	echo ''.$username.'
	<br />'.$uid.'
	<br />Your login session data is not on the record in the database';
	session_destroy();
	exit();
	} 
?>