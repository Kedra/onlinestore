<?php 
	require_once('config.php'); 
	require_once('include/header.php'); 
	require_once('include/out_page.php');
	require_once('include/view_product_list.php'); 
	require_once('include/ads.php'); 
?>
<title>Index</title>
</head>

<body>
	<div class="jumbotron">
		<div class="container">
			<?php require_once('include/view_top_ads.php');?>
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				<br>
					<div class="input-group">
						<input id="txt" type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button id="buton" class="btn btn-default" type="button">Go!</button>
						</span>
						<ul id="result"></ul>
					</div>
					<?php 
						require_once('include/'.$nav.'nav.php'); 
					?>
					<div id="add_prod" style="margin-top:50px;">
		
						<?php 
							echo $dynamicList 
						?>
						</table>
					</div>
				</div>
				<div class="col-md-4">
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
	$('#2').addClass('active').removeClass('2');
</script>
<?php 
	require_once('include/footer.php');
?>