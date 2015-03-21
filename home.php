<?php 
	require_once('config.php'); 
	require_once('include/header.php'); 
	require_once('include/ads.php'); 
	require_once('include/out_page.php');
?>
<title>LittleKomp</title>
</head>

<body>
<div class="jumbotron">
		<div class="container">
		<?php require_once('include/view_top_ads.php');?>
			<div class="row">

				
				<div class="col-md-12">
				<?php 
					require_once('include/'.$nav.'nav.php');
	
				?>
				<br><br>
						 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="img-responsive" src="images/yoga.png" width="500px" height="1000px" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>A new way to entertain</h1>
              <p>Yoga Tablet 2 adapts to you with four different ways to enjoy media — Stand, Tilt, Hold, and Hang. And smart processing, rich audio, speedy WiFi, and epic battery life make each of those ways more rewarding than ever.</p>
              <p><a class="btn btn-lg btn-primary" href="index.php" role="button">Get more details</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="img-responsive" src="images/asus.png" width="500px" height="1000px" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Sign up for free!</h1>
              <p>Sign up today to buy laptops.</p>
              <p><a class="btn btn-lg btn-primary" href="signup.php" role="button">Learn more</a></p>
            </div>
          </div>
        </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><br><br>
				
				</div>
				

			</div>
			
			<div class="row">
			
			<div class="col-md-12">
		
				
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