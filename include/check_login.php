<?php // Session
session_start();
$success_logout = '';
$login_fail = '';
if(isset($_SESSION["username"])){
	header('location: index.php');
	exit();
}
// Return Successful logged out
if(isset($_SESSION['success_logout'])){
	$success_logout = '<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Successful Logout</div>';
	unset($_SESSION['success_logout']); 
}
else{
	
}

if(isset($_SESSION['success_account'])){
	$success_logout = '<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Account created</div>';
	unset($_SESSION['success_account']);
}
else{
	
}

if(isset($_SESSION['mis_pwd'])){
	$success_logout = '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Incorrect Password.</div>';
	unset($_SESSION['mis_pwd']);
} else{
	
}

if(isset($_SESSION['data_fail'])){
	$login_fail = '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Incorrect Data.</div>';
	unset($_SESSION['data_fail']);
} else{
	
}

if(isset($_SESSION['success_signup'])){
	$success_logout = '<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Account created</div>';
	unset($_SESSION['success_signup']);
}

//Parse the log in form if the user has filled it out and pressed "Log In"
if(isset($_POST['username']) && isset($_POST['password'])){
	require_once('connect/connect.php'); 
    $username = mysql_real_escape_string(preg_replace('#[^A-za-z0-9]#i','',$_POST['username'])); //filter everything but numbers and letters
	$password = mysql_real_escape_string(preg_replace('#[^A-Za-z0-9 ]#i','',$_POST['password'])); // filter everything but numbers and letters
	$sql = mysql_query('SELECT password from users WHERE username ="'.$username.'" LIMIT 1 ');
	$existCount = mysql_num_rows($sql);
	if($existCount == 1){
		while($row = mysql_fetch_array($sql)){
			$pwd = $row['password'];
		}
	
	
		if(password_verify($password, $pwd)){
			//rehash input password
			$password = password_hash($password, PASSWORD_DEFAULT);
			$sql = mysql_query('UPDATE users SET password = "'.$password.'" WHERE username = "'.$username.'"'); // query the person
			// -------- MAKE SURE PERSON EXISTS IN DATABASE ------------
			$sql = mysql_query('SELECT * FROM users WHERE username = "'.$username.'" LIMIT 1');
			$existCount = mysql_num_rows($sql); // count the row nums
			while($row = mysql_fetch_array($sql)){
					$id = $row['id'];
					$email = $row['email'];
			}
				$_SESSION['uid'] = $id;
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['email'] = $email;
				header("location: index.php");
				exit();
		
		} else{
			$_SESSION['mis_pwd'] = '';
			header("location: login.php");
			exit();
		}
		
	}elseif($existCount==0){
		$_SESSION['data_fail'] = '';
		header("location: login.php");
		exit();
	}
	
} 

?>								