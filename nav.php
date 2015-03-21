<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">LittleKomp</a>
        </div>
         <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li id="1" class="1"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Home</a></li>
            <li id="2" class="2"><a href="index.php"><span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Products</a></li>
            <li id="3" class="3"><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Cart</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;My Account<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-header">Logged in as: <?php echo $username ?></li>
						<li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Profile</a></li>
						<li><a href="index.php?logout=<?php echo $username; ?>"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>