<?php require_once('config.php');
require_once('include/header.php'); 
require_once('include/signup_prompt.php');
require_once('include/ads.php');?> 
<title>Create an account</title>
</head>

<body>
	<div class="jumbotron">
		<div class="container">
			<?php require_once('include/blank_nav.php');?>
			<?php require_once('include/view_top_ads.php');?>
				<div  class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4"><br><br>
						<a style="color:#1b1b1b;"href="login.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Login Page</a>
						<form class="form" id="form1" name="form1" method="post" action="include/check_signup.php">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Create account</h3>
								</div>
								<div class="panel-body">
									<input name="fname" type="text" class="form-control" placeholder="First Name" required autofocus>
									<input name="lname" type="text" class="form-control" placeholder="Last Name">
									<input name="username" type="text" class="form-control" placeholder="Username">
									<input name="pwd" type="password" class="form-control" placeholder="Password">
									<input name="re_pwd" type="password" class="form-control" placeholder="Retype Password">
									<input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address">
										<object type="application/x-shockwave-flash" data="securimage/securimage_play.swf?audio_file=securimage/securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000" width="32" height="32">
										<param name="movie" value="securimage/securimage_play.swf?audio_file=securimage/securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000" />
									</object>
									<img style="padding-left:75px;" id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
										<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">
										<img width="32" height="32" src="securimage/images/refresh.png" />
									</a>
									<input placeholder="CAPTCHA Code "class="form-control" type="text" name="captcha_code" size="10" maxlength="6" /><br>
									<input class="btn btn-lg btn-success btn-block" type="submit" name="button" id="button" value="Submit" />
								</div>
							</div>
						</form>
					</div>
				</div>
				<?php require_once('include/view_bot_ads.php');?>
		</div>
</div>
<?php
	require_once('include/social_ads.php');
	require_once('include/copy.php'); 
	require_once('include/js.php'); 
    require_once('include/footer.php'); ?>