<?php // Check clicked link from product.php?id=
	if(isset($_POST['pid'])){
		if(!isset($_SESSION['username'])){
			header('location:login.php');
			exit();
		} else{
			$pid = $_POST['pid'];
			$wasFound=false;
			$i = 0; // index of array of items
			//if the cart session variable is not set or cart array is empty
			if(!isset($_SESSION['cart_array']) || count($_SESSION['cart_array']) < 1){
				//RUN IF THE CART IS EMPTY OR NOT SET
				$_SESSION['cart_array'] = array(0 => array('item_id' => $pid, 'quantity' => 1));
			} else {
				// RUN IF THE CART HAS AT LEAST ONE ITEM IN IT
				foreach($_SESSION['cart_array'] as $each_item){
					$i++;
					while(list($key, $value) = each($each_item)){
						if($key == 'item_id' && $value == $pid){
							// That item is in cart already so let's adjust its quantity using array_splice();
							array_splice($_SESSION['cart_array'],$i-1,1,array(array('item_id' => $pid, 'quantity' => $each_item['quantity'] + 1)));
							$wasFound = true;
						} // close if else
					} // close while
				} // close for each
				if($wasFound==false){
					array_push($_SESSION['cart_array'], array('item_id' => $pid, 'quantity' => 1));
				}
			}
			header('location:cart.php');
			exit();
		}
	}
?>