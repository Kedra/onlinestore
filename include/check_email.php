<?php
require_once('connect/connect.php');
if(isset($_POST['email'])){
	$user_email = mysql_real_escape_string(strip_tags(htmlentities($_POST['email'])));
	if(filter_var($user_email, FILTER_VALIDATE_EMAIL) == false){
			echo '<script>alert("Incorrect email address format");</script>';
		} else{
			$sql = mysql_query('SELECT email FROM users WHERE email = "'.$user_email.'" LIMIT 1') or die(mysql_error());
			$existCount = mysql_num_rows($sql); // count the row nums
			if($existCount == 1){ // evaluate the counts
				$to = 'kedra1995@gmail.com';
				$subject = 'Mail Test';
				$message = 'Hello world';
				$from = 'From: postmaster@localhost';
				mail($to,$subject,$message,$from);
				/*for live server
				$to = 'kedra1995@gmail.com';
				$subject = 'Mail Test';
				$message = 'Hello world';
				$from = 'From: kedra@littlekomp.tk';
				mail($to,$subject,$message,$from);
				*/
			} else{
				echo '<script>alert("Email address not found.");</script>';
			}		
		}
}