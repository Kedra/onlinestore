<?php
	session_start();
	if(isset($_SESSION['uname_taken'])){
		echo '<script>alert("Username is taken, try a different one");</script>';
		unset($_SESSION['uname_taken']);
	}
	if(isset($_SESSION['lname_empty'])){
		echo '<script>alert("Last name is required");</script>';
		unset($_SESSION['lname_empty']);
	}
	if(isset($_SESSION['uname_empty'])){
		echo '<script>alert("Username is required");</script>';
		unset($_SESSION['uname_empty']);
	}
	if(isset($_SESSION['pwd_empty'])){
		echo '<script>alert("Password is required");</script>';
		unset($_SESSION['pwd_empty']);
	}
	if(isset($_SESSION['re_pwd_empty'])){
		echo '<script>alert("Retyped Password is required");</script>';
		unset($_SESSION['re_pwd_empty']);
	}
	if(isset($_SESSION['pwd_not_match'])){
		echo '<script>alert("Password Mismatched");</script>';
		unset($_SESSION['pwd_not_match']);
	}
	if(isset($_SESSION['bad_email'])){
		echo '<script>alert("Incorrect email address format");</script>';
		unset($_SESSION['bad_email']);
	}
	if(isset($_SESSION['empty_email'])){
		echo '<script>alert("Email address is required");</script>';
		unset($_SESSION['empty_email']);
	}
	if(isset($_SESSION['email_found'])){
		echo '<script>alert("Email address is taken");</script>';
		unset($_SESSION['email_found']);
	}
	if(isset($_SESSION['captcha_fail'])){
		echo '<script>alert("Incorrect security code");</script>';
		unset($_SESSION['captcha_fail']);
	}
	if(isset($_SESSION['enc_fail'])){
		echo '<script>alert("Encryption failed");</script>';
		unset($_SESSION['enc_fail']);
	}
?>