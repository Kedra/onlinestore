<?php // Access the array and run code to remove that index 
	if(isset($_POST['index_to_remove']) && $_POST['index_to_remove'] != ''){
		$key_to_remove = $_POST['index_to_remove'];
		if(count($_SESSION['cart_array']) <= 1){
			unset($_SESSION['cart_array']);
		} else {
			unset($_SESSION['cart_array'][''.$key_to_remove.'']);
			sort($_SESSION['cart_array']);
		}
		header('location: cart.php');
		exit();
	}
?>