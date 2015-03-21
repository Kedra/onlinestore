 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="<?php echo IMAGES;?>logo.png" height="30px" width="100px"></a>
      </div>
	  <div id="navbar" class="navbar-collapse collapse">
	    <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<?php echo $manager ?><span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-header">Account Settings</li>
						<li><a href="index.php?logout=<?php echo $manager; ?>"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Log Out</a></li>
					</ul>
            </li>
          </ul>
	  </diV>
		</div>
    </nav>