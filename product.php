<?php require_once('config.php');
require_once('include/header.php'); 
require_once('include/out_page.php');
require_once('include/product_details.php');
require_once('include/ads.php'); ?>
<title>
	<?php echo $product_name; ?>
</title>
</head>

<body>
	<div class="jumbotron">
		<div class="container">
			<?php require_once('include/view_top_ads.php');?>
			<?php require_once('include/'.$nav.'nav.php'); ?>
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<div id="tbl" class="table-responsive">
						<table class="table" border="0" cellspacing="0">
							<?php echo $product_view; ?>
						</table>
					</div>
				</div>
				<div class="col-md-2">
				</div>
			</div>	<br>
		<?php require_once('include/view_bot_ads.php');?>
		</div>
	</div>
<?php require_once('include/social_ads.php'); ?>
<?php require_once('include/copy.php'); ?>
<?php require_once('include/js.php'); ?>
<?php require_once('include/footer.php'); ?>