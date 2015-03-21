<?php 
	require_once('config.php'); 
	require_once('include/header.php'); 
	require_once('include/ads.php'); 
	require_once('include/out_page.php');
?>
<title>Privacy Policy</title>
</head>

<body>
<div class="jumbotron">
		<div class="container">
		<?php require_once('include/view_top_ads.php');?>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
				<?php 
					require_once('include/'.$nav.'nav.php'); 	
				?>
				</div>
				<div class="col-md-4"></div>
			</div>
			
			<div class="row">
				<div class="col-md-3">
				</div>
				
				
				
				<div class="col-md-6">
					<h2><span  class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><span style="padding-left:12px" >Privacy Policy</span></h2>
					<p>Privacy Policy for LittleKomp</p>
					
					<p>The privacy of our visitors to LittleKomp is very important to us.</p>
					
					<p>At LittleKomp, we recognize that privacy of your personal information 
					is important. 
					Here is information on what types of personal information we 
					receive and collect when you use and visit LittleKomp
					and how we safeguard your information.</p>
					
					<h2><span  class="glyphicon glyphicon-folder-close" aria-hidden="true"></span><span style="padding-left:12px;">Log Files</span></h2>
					<p>Same like other websites, we collect and use data coming from your 
					inputs for logging in and transacting out from your accounts.
					Examples such as the browsers you use in visiting our website
					(Chrome, Firefox), your Internet Service Provider(PLDT, Globe),
					the time you visited us and the pages you view on this website.</p>
					
					<h2><span  class="glyphicon glyphicon-stats" aria-hidden="true"></span><span style="padding-left:12px;">Cookies and Sessions</span></h2>
					<p>The way we use in LittleKomp of cookies and sessions are fairly for authentication and
					security to avoid spoofing of your accounts and data. On cookies, there are only a few usage on this
					website and one from them which is essential is enabling logged in even after browser is closed.
					And finally for the sessions are for the users' interaction with the website.</p>
					
					<p>Cookies aren't really important  in visiting our website. 
					Deleting cookies does not mean you are permanently opted out of any advertising program. 
					Unless you have settings that disallow cookies, 
					the next time you visit a site running the advertisements, 
					a new cookie will be added.</p>
					
					<h2><span  class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><span style="padding-left: 12px;">Advertisements</span></h2>
					<p>Advertisments that you will see from around the website aren't linked into phishing
					and malicious websites that harm the user's privacy and information. They are 
					linked to different websites that are free-malware as we care for the privacy of 
					our visitors and customers. You can also use an ad-block plugin if you want but some
					features such as the translator will be blocked as well so be careful.</p>
				</div>
				
				<div class="col-md-3">
				
				</div>
							
			</div>
<?php require_once('include/view_bot_ads.php');?>
		</div>
	
	</div>	
<?php 
	require_once('include/social_ads.php');
	require_once('include/copy.php');
	require_once('include/js.php');
	require_once('include/footer.php');
?>