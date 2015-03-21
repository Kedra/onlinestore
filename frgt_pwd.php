<?php 
	require_once('config.php');
	require_once('include/header.php');
	require_once('include/check_pwd.php');
	require_once('include/check_email.php');
	require_once('include/ads.php');
?>
<title>Forgot Password</title>
</head>

<body>
	<div class="jumbotron">
		<div class="container">
			<?php require_once('include/view_top_ads.php');?>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
				<?php 
				require_once('include/blank_nav.php');
				?><br><br>
					<a style="color:#1b1b1b;"href="login.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Login Page</a>
					<form class="form" id="form1" name="form1" method="post" action="frgt_pwd.php">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Reset Lost Password</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
								</div>
								<input class="btn btn-lg btn-success btn-block" type="submit" name="button" id="button" value="Submit" />
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-4"></div>
			</div>
			<?php require_once('include/view_bot_ads.php');?><br><br><br>
		</div>
	</div>
<?php 
	require_once('include/social_ads.php');
	require_once('include/copy.php'); 
	require_once('include/js.php'); 
	require_once('include/footer.php'); 
?>