<?php require_once('config.php'); 
require_once('include/header.php'); 
require_once('include/check_session.php'); 
require_once('include/edit_profile.php'); ?>
<style>
	ul {
		list-style-type: none;
	}
</style>
<title>Profile</title>
</head>

<body>
	<div class="jumbotron">
		<div class="container">
			<?php require_once('include/nav.php'); ?>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<ul>
						<li>
							<h3>General Profile</h3>
						</li>
						<li>
							<h4>Name</h4>
						</li>
						<li><span><?php echo $name; ?></span>
						</li>
						<li>
							<h4>Email</h4>
						</li>
						<li><span><?php echo $email_addr; ?></span>
						</li>
						<li>
							<h4>Password</h4>
						</li>
						<li><span><?php echo $password; ?></span>
						</li>
					</ul>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
<?php require_once('include/copy.php'); ?>
<?php require_once('include/social_ads.php'); ?>
<?php require_once('include/js.php'); ?>
<script>
	$('#2').addClass('active').removeClass('2');
</script>
<?php require_once('include/footer.php'); ?>