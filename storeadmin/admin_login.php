<?php require_once('../config.php'); 
require_once('/admin_include/check_login.php'); 
require_once('../include/header.php'); ?>
<title>Admin Login</title>
</head>
<body>
<div class="jumbotron">
<div class="container">
<?php require_once('../include/admin_nav.php'); ?>
<?php 	
	echo $success_logout.$login_fail; 
?>	
	<div style="padding-top:120px;" class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<form class="form" id="form1" name="form1" method="post" action="admin_login.php">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Admin Login</h3>
					</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="username">
									Username
								</label>
								<input autofocus="autofocus" class="form-control" name="username" type="text" maxlength="50" placeholder="" autocomplete="off"  />
							</div>
							<div class="form-group">
								<label for="password">
								Password
								</label>
								<input class="form-control" name="password" type="password" id="password"  maxlength="50" placeholder="" autocomplete="off" />
								
							</div>
							<input class="btn btn-default" type="submit" name="button" id="button" value="Log In" />
						</div>
				</div>
			</form>	<br><br><br>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>
<?php require_once('admin_include/admin_footer.php'); ?>
<?php require_once('../include/js.php'); ?>
<?php require_once('../include/footer.php'); ?> 
<?php session_destroy(); ?>