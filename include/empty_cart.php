<?php // If user chooses to empty their shopping cart
	if(isset($_GET['cmd']) && $_GET['cmd'] == 'emptycart'){
		unset($_SESSION['cart_array']);
	}
?>