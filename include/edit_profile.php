<?php 

$name = $username.'<a style="padding-left: 150px;" href="profile.php?name_id='.$uid.'">Edit</a>';
$email_addr = $email.'<a style="padding-left: 35px;" href="profile.php?email_id='.$uid.'">Edit</a>';
$password = '<a  href="profile.php?password_id='.$uid.'">Edit</a>';
if(isset($_GET['name_id'])){
	$name_id = $_GET['name_id'];
	$_SESSION['change_user'] = '';
	$_SESSION['change_user'] = '<form class="form" id="form1" name="form1" method="post" action="check_profile.php">
					<div class="panel-body">
							<div class="form-group">
								<label for="lbl_email">Current Username: </label>
								<label for="cur_email">"'.$username.'"</label>
							<div class="form-group">
								<label for="lbl_changeemail">New Username: </label>
								<input autofocus="autofocus" class="form-control" name="username" type="text" maxlength="50" placeholder="" autocomplete="off" />
							</div>
							<input class="btn btn-default" type="submit" name="button" id="button" value="Change" />
							&nbsp;&nbsp;&nbsp;
							<a href="profile.php?cancel_name="'.$name_id.'">
								  <button type="button" class="btn btn-default">
								   Cancel
								  </button>
								 </a>
						</div>
				';
				
	$name = $_SESSION['change_user'];
	if(isset($_GET['cancel_name'])){
		$name = $username.'<a style="padding-left: 150px;" href="profile.php?name_id='.$uid.'">Edit</a>';
		unset($_SESSION['change_user']);
	} 
				
}
else if(isset($_GET['email_id'])){
	$email_id = $_GET['email_id'];
	$_SESSION['change_email'] = '';
	$_SESSION['change_email'] = '<form class="form" id="form1" name="form1" method="post" action="check_profile.php">
					<div class="panel-body">
							<div class="form-group">
								<label for="lbl_username">Current Email: </label>
								<label for="cur_username">"'.$email.'"</label>
							<div class="form-group">
								<label for="lbl_changeuser">New Email: </label>
								<input autofocus="autofocus" class="form-control" name="email" type="text" maxlength="50" placeholder="" autocomplete="off" />
							</div>
							<input class="btn btn-default" type="submit" name="button" id="button" value="Change" />
							&nbsp;&nbsp;&nbsp;
							<a href="profile.php?cancel_email="'.$email_id.'">
								  <button type="button" class="btn btn-default">
								   Cancel
								  </button>
								 </a>
						</div>';
	$email_addr = $_SESSION['change_email'];
	if(isset($_GET['cancel_email'])){
		$email_addr = $email.'<a style="padding-left: 35px;" href="profile.php?email_id='.$uid.'">Edit</a>';
		unset($_SESSION['change_email']);
	} 	
}
else if(isset($_GET['password_id'])){
	$pwd_id = $_GET['password_id'];
	$_SESSION['change_pwd'] = '';
	$_SESSION['change_pwd'] = '<form class="form" id="form1" name="form1" method="post" action="check_profile.php">
					<div class="panel-body">
							<div class="form-group">
								<label for="lbl_cur_pwd">Current Password: </label>
								<input autofocus="autofocus" class="form-control" name="cur_pwd" type="password" maxlength="60" placeholder="" autocomplete="off" />
								<label for="lbl_new_pwd">New Password: </label>
								<input autofocus="autofocus" class="form-control" name="new_pwd" type="password" maxlength="60" placeholder="" autocomplete="off" />
								<label for="lbl_re_pwd">Retype Password: </label>
								<input autofocus="autofocus" class="form-control" name="re_pwd" type="password" maxlength="60" placeholder="" autocomplete="off" />
							</div>
							<input class="btn btn-default" type="submit" name="button" id="button" value="Change" />
							&nbsp;&nbsp;&nbsp;
							<a href="profile.php?cancel_pwd='.$pwd_id.'">
								  <button type="button" class="btn btn-default">
								   Cancel
								  </button>
								 </a>
						</div>';		
	$password = $_SESSION['change_pwd'];
	if(isset($_GET['cancel_pwd'])){
		$password = '<a  href="profile.php?password_id='.$uid.'">Edit</a>';
		unset($_SESSION['change_pwd']);
	} 							
}



?>