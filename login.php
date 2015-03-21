<?php 
	require_once('config.php');
	require_once('include/header.php'); 
	require_once('include/check_login.php'); 
	require_once('include/ads.php');
?>
<title>User Login</title>
</head>

<body>
	<div class="jumbotron">
		<div class="container">
			<?php 
				require_once('include/blank_nav.php');
			?>
			
			<?php require_once('include/view_top_ads.php');?>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4"><br><br>
				<a style="color:#1b1b1b;padding-left:0px;"href="frgt_pwd.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Forgot Password?</a>
				<a  style="color:#1b1b1b;padding-left:59px;" href="signup.php">Sign Up For a Account</a><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
					<form class="form" id="form1" name="form1" method="post" action="login.php">
					<?php echo $success_logout.$login_fail?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">User Login</h3>
							</div>
							<div class="panel-body">
									<input placeholder="Username" autofocus="autofocus" class="form-control" name="username" type="text" maxlength="50" autocomplete="off" />

									<input placeholder="Password" class="form-control" name="password" type="password" id="password" maxlength="50" autocomplete="off" />

									<input class="btn btn-lg btn-success btn-block" type="submit" name="button" id="button" value="Log In" />

							</div>
						</div>
					</form>
				</div>
				<div class="col-md-4"></div>
			</div><br><br>
			<?php require_once('include/view_bot_ads.php');?><br><br><br>
		</div>
	</div>

<?php 
	require_once('include/social_ads.php');
	require_once('include/copy.php'); 
	require_once('include/js.php'); 
	require_once('include/footer.php'); 
?>
