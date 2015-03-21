<?php 
require_once("include/check_session.php");
if(isset($_POST['username'])){
		require_once("connect/connect.php");
		$new_user = mysql_real_escape_string(preg_replace('#[^A-za-z0-9]#i','',$_POST['username']));
		$sql = mysql_query('UPDATE users SET username = "'.$new_user.'" WHERE id = '.$uid.'') or die(mysql_error());
		$_SESSION['username'] = $new_user;
		header('location:profile.php');
		exit();
}

if(isset($_POST['email'])){
		require_once("connect/connect.php");
		$new_email = mysql_real_escape_string($_POST['email']);
		if(filter_var($new_email, FILTER_VALIDATE_EMAIL) == false){
			echo "You have an invalid email address, please resend data in a correct format.<br>";
			echo 'Click <a href="profile.php">Here</a> to go back.';
		} 
		$sql = mysql_query('UPDATE users SET email = "'.$new_email.'" WHERE id = '.$uid.'') or die(mysql_error());
		$_SESSION['email'] = $new_email;
		header('location:profile.php');
		exit();
}

if(isset($_POST['cur_pwd']) && isset($_POST['new_pwd']) && isset($_POST['re_pwd'])){
	$cur_pwd = mysql_real_escape_string($_POST['cur_pwd']);
	$new_pwd = mysql_real_escape_string($_POST['new_pwd']);
	$re_pwd = mysql_real_escape_string($_POST['re_pwd']);
	require_once('connect/connect.php');
	$sql = mysql_query('SELECT password FROM users where id = '.$uid.' LIMIT 1');
	$existCount = mysql_num_rows($sql); // count the row nums
	if($existCount == 1){ // evaluate the count
			while($row = mysql_fetch_array($sql)){
				$pwd = $row['password'];
			}
			$pwd_verify = password_verify($cur_pwd, $pwd);
			if($pwd_verify == 1){
				$new_hash = password_hash($new_pwd, PASSWORD_DEFAULT);
				$re_hash = password_hash($re_pwd, PASSWORD_DEFAULT);
				$ok_pwd_00 = password_verify($new_pwd, $new_hash);
				$ok_pwd_01 = password_verify($re_pwd, $re_hash);
				if($new_pwd === $re_pwd && $ok_pwd_00 == 1 && $ok_pwd_01 == 1){
					$sql = mysql_query('UPDATE users SET password = "'.$re_hash.'" WHERE id = '.$uid.'') or die(mysql_error());
					$_SESSION['password'] = $new_pwd;
					header('location:profile.php');
					exit();
				}else{
					echo 'Password mismatched between new and retyped passwords.';
				} 
				
	} else {
		echo 'Current password mismatched with our data';
	}
}
	
}
?>