<?php // Check to see the URL variable is set and that it exists in the database
$check_log = '';
	if(isset($_GET['id'])){
		$product_view = '';
		$id = preg_replace('#[^0-9]#i','',$_GET['id']);
		// Use this variable to check if this ID exists, if yes get the product
		// details, if no then exit this script and give message why.
		$sql = mysql_query('SELECT * FROM products WHERE pid = '.$id.' LIMIT 1');
		$productCount = mysql_num_rows($sql); // count the output amount
		if($productCount > 0){
			// get all the product details
			while($row = mysql_fetch_array($sql)){
				$product_name = $row['product_name'];
				$price = $row['price'];
				$qty = $row['qty'];
				$details = $row['details'];
				$category = $row['category'];
				$subcategory = $row['subcategory'];
				$date_added = strftime('%b %d %Y', strtotime($row['date_added']));
				$head_prod = '<h1>'.$product_name.'</h1>
								<tr>
									<th>Product Image</th>
									<th>Product Details</th>
								</tr>
								<tr>
									<td>
										<div >
											<a href="'.IMG_PATH.''.$id.'.jpg" class="thumbnail"><img width=250px height=250px src="'.IMG_PATH.''.$id.'.jpg"></a>
											<br />
											<a href="'.IMG_PATH.''.$id.'.jpg" >View Full Image</a>
										</div>
									</td>
									<td>
										<p>'.$product_name.'</p>
										<p>PHP '.$price.'</p>
										<p>Quantity: '.$qty.'</p>
										<p>'.$details.'</p>
										<p>
											<form id="form1" name="form1" method="post" action="cart.php">
												<input type="hidden" name="pid" id="pid" value="'.$id.'" />
												<input class="btn btn-default" type="submit" name="button" id="button" value="';
			    $foot_prod = '" />
											</form>
										</p>
									</td>
								</tr>
								';
				if(!isset($_SESSION['username'])){
					$check_log = 'Buy Now';
					$product_view = $head_prod.$check_log.$foot_prod;
				} else{
					$check_log = 'Add To Cart';
					$product_view = $head_prod.$check_log.$foot_prod;
				}
			}
		} else {
			echo 'That item does not exist.';
			exit();
		}
	} else{
		echo "Data to render this page is missing.";
		exit();
	}
	mysql_close();
?> 