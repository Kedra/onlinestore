<?php
require_once('config.php');
require_once('include/header.php'); 
?>
<title>Checkout Cancelled</title>
</head>
<body>
<div class="jumbotron">
 <div class="container">
  <div class="row">
    <div class="col-md-4">
    </div>
  
     <div class="col-md-4">
	 <?
	 echo 'You have cancelled checking out your order,</br> <a href="cart.php">Click Here</a> to go back.';
	 ?>
    </div>
  
    <div class="col-md-4">
    </div>
   </div>
  </div>
 </div>
</div>
</body>
<?
require_once('include/js.php');
require_once('include/footer.php');
?>