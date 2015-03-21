<?php
session_start();
require_once('../connect/connect.php');
if(isset($_POST['fname'])){
	$fname = mysql_real_escape_string(filter_var($_POST['fname'], FILTER_SANITIZE_STRING));
	$lname = mysql_real_escape_string(filter_var($_POST['lname'], FILTER_SANITIZE_STRING));
	if(empty($lname)){
		$_SESSION['lname_empty'] = '';
		header('location:../signup.php');
		exit();
	}
		$username = mysql_real_escape_string(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
		if(empty($username)){
			$_SESSION['uname_empty'] = '';
			header('location:../signup.php');
			exit();
		}
		$sql = mysql_query('SELECT username FROM users WHERE username = "'.$username.'" LIMIT 1') or die(mysql_error());
		$existCount = mysql_num_rows($sql); // count the row nums
		if($existCount == 1){
			$_SESSION['uname_taken'] = '';
			header('location:../signup.php');
			exit();
		}
		
		$pwd = mysql_real_escape_string(filter_var($_POST['pwd'], FILTER_SANITIZE_STRING));
		if(empty($pwd)){
			$_SESSION['pwd_empty'] = '';
			header('location:../signup.php');
			exit();
		}
		$re_pwd = mysql_real_escape_string(filter_var($_POST['re_pwd'], FILTER_SANITIZE_STRING));
		if(empty($re_pwd)){
			$_SESSION['re_pwd_empty'] = '';
			header('location:../signup.php');
			exit();
		}
		
	    if($pwd != $re_pwd){
			$_SESSION['pwd_not_match'] = '';
			header('location:../signup.php');
			exit();
		}
		
		if(empty($_POST['email'])){
			$_SESSION['email_empty'] = '';
			header('location:../signup.php');
			exit();
		}
		
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false){
			$_SESSION['bad_email'] = '';
			header('location:../signup.php');
			exit();	
		}
		$email = mysql_real_escape_string($_POST['email']);
		$sql = mysql_query('SELECT email FROM users WHERE email ="'.$email.'" LIMIT 1');
		$existCount = mysql_num_rows($sql); // count the row nums
		if($existCount == 1){
			$_SESSION['email_found'] = '';
			header('location:../signup.php');
			exit();	
		}
		
		include_once $_SERVER['DOCUMENT_ROOT'] . '/onlinestore/securimage/securimage.php';

		$securimage = new Securimage();
													
		if ($securimage->check($_POST['captcha_code']) == false) {
		// the code was incorrect
		// you should handle the error so that the form processor doesn't continue
		// or you can use the following code if there is no validation or you do not know how
			$_SESSION['captcha_fail'] = '';
			header('location:../signup.php');
			exit();	
		}
		
		$enc_pwd = password_hash($re_pwd, PASSWORD_DEFAULT);
		
		$pwd_verify = password_verify($re_pwd, $enc_pwd);
		
		if($pwd_verify == 1){
			$sql = mysql_query('INSERT into users (fname, lname, username, password, email) values("'.$fname.'", "'.$lname.'","'.$username.'","'.$enc_pwd.'", "'.$email.'")') or die(mysql_error());
			$_SESSION['success_signup'] = '';
			header('location:../login.php');
			exit();	
		}
		
		
		
		
}		
/*
if(isset($_POST['submit'])){
		if(isset($_POST['fname'])){
			$fname = mysql_real_escape_string(filter_var($_POST['fname'], FILTER_SANITIZE_STRING));
			if(isset($_POST['lname'])){
				$lname = mysql_real_escape_string(filter_var($_POST['lname'], FILTER_SANITIZE_STRING));
				if(isset($_POST['username'])){
					$username = mysql_real_escape_string(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
					$sql = 'SELECT username * FROM users WHERE username ="'.$username.'" LIMIT 1';
					$existCount = mysql_num_rows($sql); // count the row nums
					if($existCount == 1){
						$_SESSION['sign_up_fail'] = '4';
						header("location: signup.php");
						exit();
					} else{
							if(isset($_POST['pwd'])){
								$pwd = mysql_real_escape_string(filter_var($_POST['pwd'], FILTER_SANITIZE_STRING));
							if(isset($_POST['re_pwd'])){
								$re_pwd = mysql_real_escape_string(filter_var($_POST['re_pwd'], FILTER_SANITIZE_STRING));
								if($re_pwd == $pwd){
									if(isset($_POST['email'])){
										if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false){
											$_SESSION['sign_up_fail'] = '9';
											header("location: signup.php");
											exit();	
										} else{
											$email = mysql_real_escape_string($_POST['email']);
											$sql = 'SELECT email FROM users WHERE email ="'.$email.'" LIMIT 1';
											$existCount = mysql_num_rows($sql); // count the row nums
											if($existCount == 1){
													$_SESSION['sign_up_fail'] = '10';
													header("location: signup.php");
													exit();	
												} else{
													include_once $_SERVER['DOCUMENT_ROOT'] . '/onlinestore/securimage/securimage.php';

													$securimage = new Securimage();
													
													if ($securimage->check($_POST['captcha_code']) == false) {
														// the code was incorrect
														// you should handle the error so that the form processor doesn't continue
														// or you can use the following code if there is no validation or you do not know how
														$_SESSION['sign_up_fail'] = '11';
														header("location: signup.php");
														exit();	
													} else{
														echo "hel";
													}
												}
										}
									} else{
										$_SESSION['sign_up_fail'] = '8';
										header("location: signup.php");
										exit();	
									}
								} else{
									$_SESSION['sign_up_fail'] = '7';
									header("location: signup.php");
									exit();	
								}
							} else{
								$_SESSION['sign_up_fail'] = '6';
								header("location: signup.php");
								exit();	
							}
						} else{
							$_SESSION['sign_up_fail'] = '5';
							header("location: signup.php");
							exit();
						}
					} 
				}
			} else{
				$_SESSION['sign_up_fail'] = '2';
				header("location: signup.php");
				exit();
			}
		} else{
			$_SESSION['sign_up_fail'] = '1';
			header("location: signup.php");
			exit();
		}
	}
*/

?>