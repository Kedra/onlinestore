<!doctype html>
<html>
<title>
</title>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php echo IMAGES;?>little.png" height="30px" width="100px"></a>
        </div>
		 <div id="navbar" class="navbar-collapse collapse">
			<div id="login"><div class="navbar-form navbar-right">
				<button id="log" type="button" class="btn btn-success">Log In</button>
				<button id="sign" type="button" class="btn btn-warning">Sign Up</button>
			</div>
			</div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>


<!--- js here -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">$(document).ready(function(){
    $("#log").click(function(){
        $("#login").load("include/login_nav.php");
    });
	
});

$(document).ready(function(){
    $("#x").click(function(){
        $("#login").load("include/login.txt");
    });
	
});
</script>

</body>
</html>