<?php // Render the cart for the user to view
	$cartOutput = '';
	$cartTotal = '';
	$pp_checkout_btn = '';
	$product_id_array = '';
	$cartOutput .= '<h2 class="heading">Shopping Cart</h2>
					<table class="table" style="margin-top: 20px;" align="center" border="1"  cellspacing="0">
					<tr class="active">
					<td width="10%">Item</td>
					<td width="30%">Description</td>
					<td width="7%">Unit Price</td>
					<td width="10%">Quantity</td>
					<td width="7%"></td>
					<td width="9%">Total Price</td>
					</tr>';
	if(!isset($_SESSION['cart_array']) || count($_SESSION['cart_array']) < 1){
		$cartOutput .= '<tr>
			           <td colspan="6">
			           <div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Your cart is empty, add products to get started.</div>
				    </td>
				    </tr>
                                    </table>';
	} else {

		$i = 0;
		// Start Paypal Checkout Button
		$pp_checkout_btn .= '
							<form action="https://sandbox.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="upload" value="1">
								<input type="hidden" name="business" value="kedra-facilitator@nigge.rs">
							';
		foreach($_SESSION['cart_array'] as $each_item){
			$item_id = $each_item['item_id'];
			$sql = mysql_query('SELECT * FROM products WHERE pid='.$item_id.' LIMIT 1');
			while($row = mysql_fetch_array($sql)){
				$product_name = $row['product_name'];
				$price = $row['price'];  
				$details = $row['details'];
			}
			// Dynamic Checkout 
			$x = $i + 1; 
			$pp_checkout_btn .= '
								<input type="hidden" name="item_name_'.$x.'" value="'.$product_name.'">
								<input type="hidden" name="amount_'.$x.'" value="'.$price.'">
								<input type="hidden" name="quantity_'.$x.'" value="'.$each_item['quantity'].'">
								';
			// Create the product array variable
			$product_id_array .= ''.$item_id.''.$each_item['quantity'].'';
			// Dynamic Table row assembly
			$cartOutput .= '<tr>';
			$cartOutput .= '<td>'.$product_name.'
								<br /><a href="'.IMG_PATH.''.$item_id.'.jpg" class="thumbnail">
								<img src="'.IMG_PATH.''.$item_id.'.jpg" alt="'.$product_name.'" width="100px" height="100px" border="1" />
								</a>
							</td>';
			$cartOutput .= '<td><br />'.$details.'</td>';
			$cartOutput .= '<td><br />₱ '.$price.'</td>';
			$total = $price * $each_item['quantity']; 
			$cartTotal = $total + $cartTotal;
			$cartOutput .= '<td align="center"><form action="cart.php" method="post">
									<input name="quantity" type="text" value="'.$each_item['quantity'].'" size="1" maxlength="2" /><br />
									<input  class="btn btn-default" name="adjustBtn'.$item_id.'" type="submit" value="Change" />
									<input name="item_to_adjust" type="hidden" value="'.$item_id.'" />
								</form>	<br /></td>';
			//$cartOutput .= '<td><br />'.$each_item['quantity'].'</td>';
			$cartOutput .= '<td align="center"><br />
								<form action="cart.php" method="post">
									<input  class="btn btn-default" name="deletebtn'.$item_id.'" type="submit" value="Remove" />
									<input name="index_to_remove" type="hidden" value="'.$i.'" />
								</form>	
							</td>';
			$cartOutput .= '<td align="center"><br />₱ '.$total.' PHP</td>';
			
			$cartOutput .= '</tr>';
			$i++;
			//while(list($key, $value) = each($each_item)){
				//$cartOutput .=  ''.$key.':'.$value.'<br />';
			//}
		}
		$cartTotal = '₱ '.$cartTotal.' PHP';
		// End of PP Checkout Button
		$pp_checkout_btn .= '
							<input type="hidden" name="custom" value="'.$product_id_array.'">
							<input type="hidden" name="notify_url" value="localhost/projects/My%20%Online%20Store/ipn.php">
							<input type="hidden" name="return" value="localhost/projects/My%20Online%20Store/checkout_complete.php">
							<input type="hidden" name="rm" value="2">
							<input type="hidden" name="cbt" value="Return To The Store">
							<input type="hidden" name="cancel_return" value="localhost/projects/My%20Online%20Store/paypal_cancel.php">
							<input type="hidden" name="lc" value="US">
							<input type="hidden" name="currency_code" value="USD">
							<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with PayPal - it\'s easy, fast and secure!">
						</form>
							';
		$cartOutput .= '
						<tr align="right">
							<td colspan="6">
									Subtotal: '.$cartTotal.'
							</td>
						</tr>
						</table>
							
						<div style="margin-right:20px;"  align="right">
						'.$pp_checkout_btn.'
                                                <a href="cart.php?cmd=emptycart">
						<button type="button" class="btn btn-default">
							Empty Cart
						</button>
                                                </a>
						</div>
					';
							
	}
?>	