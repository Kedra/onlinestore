<?php 
	require_once('config.php');
	require_once('include/header.php'); 
	require_once('include/check_session.php');
	require_once('include/error_report.php');
	require_once('include/added_items.php');
	require_once('include/empty_cart.php');
	require_once('include/change_quantity.php');
	require_once('include/access_array.php');
	require_once('include/render_cart.php'); 
	require_once('include/ads.php'); 
?>
<title>My Cart</title>
</head>
<body>
<div class="jumbotron">
	<div class="container">
	<?php 
		require_once('include/nav.php');
	?>
	<?php require_once('include/view_top_ads.php');?>
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<?php 
						echo $cartOutput; 
					?><br>
				</div>
				<div class="col-md-2">
				
				</div>
			</div>
			
		<?php require_once('include/view_bot_ads.php');?>
	</div>
</div>
<?php 
	require_once('include/social_ads.php'); 
	require_once('include/copy.php'); 
	require_once('include/js.php');
?>
<script>
	$('#3').addClass('active').removeClass('3');
</script>
<?php 
	require_once('include/footer.php');
?>