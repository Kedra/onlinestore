<?php $cart_no = '';
if(isset($_SESSION['cart_qty'])){
	$cart_no = '('.$_SESSION['cart_qty'].')';
} else{
	$cart_no = '';
}
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php"><img src="<?php echo IMAGES;?>logo.png" height="30px" width="100px"></a>
        </div>
         <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id="1" class="1"><a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Home</a></li>
            <li id="2" class="2"><a href="index.php"><span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Products</a></li>
            <li id="3" class="3"><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Cart <?php echo $cart_no;?></a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<?php echo $username ?><span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-header">Account Settings</li>
						<li><a href="profile.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Profile</a></li>
						<li><a href="index.php?logout=<?php echo $username; ?>"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Log Out</a></li>
					</ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>