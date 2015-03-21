<?php
session_start();
if(isset($_SESSION["manager"])){
	header('location: index.php');
	exit();
}
// Return Successful logged out
if(isset($_SESSION['success_logout'])){
	$success_logout = '<div class="alert alert-success" role="alert">Successful Logout</div>';
}
else{
	$success_logout = '';
}
 // Return failure logging in
if(isset($_SESSION['login_fail'])){
	$login_fail = '<div class="alert alert-danger" role="alert">Incorrect Data.</div>';
}
else{
	$login_fail = '';
}

//Parse the log in form if the user has filled it out and pressed "Log In"
if(isset($_POST['username']) && isset($_POST['password'])){
	require_once('../connect/connect.php'); 
    $manager = mysql_real_escape_string(preg_replace('#[^A-za-z0-9]#i','',$_POST['username'])); //filter everything but numbers and letters
	$password = mysql_real_escape_string(preg_replace('#[^A-Za-z0-9 ]#i','',$_POST['password'])); // filter everything but numbers and letters
	$sql = mysql_query('SELECT password from users WHERE username ="'.$manager.'"');
	$existCount = mysql_num_rows($sql);
	if($existCount == 1){
		while($row = mysql_fetch_array($sql)){
			$pwd = $row['password'];
		}
	}
	else if($existCount == 0) {
		$_SESSION['login_fail'] = 'login_fail';
	    header("location: index.php");
		exit();
	
	}
	
	$pwd_verify = password_verify($password, $pwd); 
	
	if($pwd_verify == 1){
		//rehash input password
		$password = password_hash($password, PASSWORD_DEFAULT);
		$sql = mysql_query('UPDATE users SET password = "'.$password.'" WHERE username = "'.$manager.'"') or die(mysql_error()); // query the person
		// -------- MAKE SURE PERSON EXISTS IN DATABASE ------------
		$sql = mysql_query('SELECT * FROM users WHERE username = "'.$manager.'" LIMIT 1');
		$existCount = mysql_num_rows($sql); // count the row nums
		while($row = mysql_fetch_array($sql)){
				$id = $row['id'];
				$email = $row['email'];
			}
			$_SESSION['id'] = $id;
			$_SESSION['manager'] = $manager;
			$_SESSION['password'] = $password;
			$_SESSION['email'] = $email;
			header("location: index.php");
			exit();
		
		}
	
	else{
		$_SESSION['login_fail'] = 'login_fail';
	    header("location: index.php");
		exit();
	}
}
?>	