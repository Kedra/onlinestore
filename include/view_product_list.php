<?php // Run a select query to get my latest items
	$dynamicList = ''; 
	$dynamicList .='<table id="tbl" class="table" border="0" cellspacing="0">
					<tr>
						<th>Product Image</th>
						<th>Product Details</th>
					</tr>';
	$sql = mysql_query('SELECT * FROM products ORDER BY date_added DESC	LIMIT 6');
	$productCount = mysql_num_rows($sql); //count the output amount
	if($productCount > 0){
		while($row = mysql_fetch_array($sql)){
			$id = $row['pid'];
			$product_name = $row['product_name'];
			$date_added = strftime('%b %d %Y', strtotime($row['date_added']));
			$price = $row['price'];
			$qty = $row['qty'];
			$dynamicList .= '<tr>
								<td>
									<a href="'.IMG_PATH.''.$id.'.jpg" ><img width=250px height=250px  src="'.IMG_PATH.''.$id.'.jpg"></a>
								</td>
								<td>
									<p>'.$product_name.'</p>
									<p>PHP '.$price.'</p>
									<p>Quantity: '.$qty.'</p>
									<p>
									 <a href="product.php?id='.$id.'">
									  <button type="button" class="btn btn-default">
									   View Product Details
									  </button>
									 </a>
									</p>
								</td>
							 </tr>';
			
		}
	} else {
		$dynamicList .=  '<div class="alert alert-info" role="alert">No Products are added in the inventory.</div>'; 
	}
	mysql_close();
?>