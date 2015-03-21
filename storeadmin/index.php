<?php require_once('../config.php');
require_once('admin_include/check_session.php'); 
require_once('../include/header.php'); ?>
<title>Admin Index</title>
</head>
<body>
<div class="jumbotron">
<div class="container">
<?php require_once('admin_include/admin_nav_log.php'); ?>
	<div style="padding-top: 150px;" class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<div><h1>Hello, <?php echo $_SESSION['manager']; ?></h1></div><br /><br />
				<div>&darr;<a href="inventory_list.php">Manage Inventory</a></div>
				<div id="pageFooter">&darr;<a href="index.php?logout=<?php echo $manager; ?>">Log out</a></div>
			</div>
			<div class="col-md-4">
			</div>
		</div><br><br><br><br><br><br>
	</div>
</div>
</div>
<?php require_once('admin_include/admin_footer.php'); ?>
<?php require_once('../include/js.php'); ?>
<?php require_once('../include/footer.php'); ?> 