<?php // Gather this product's full information for inserting automatically into the edit form below on page
	if(isset($_GET['pid'])){
		// This block grabs the whole list for viewing 
		$targetID = $_GET['pid'];
		$sql = mysql_query('SELECT * FROM products WHERE pid = "'.$targetID.'" LIMIT 1');
		$productCount = mysql_num_rows($sql); //count the output amount
		if($productCount > 0){
		$product_list = '<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4">
							<table id="tbl" class="table" border="0" cellspacing="0">
								<tr>
									<th>Product Image</th>
									<th>Product Details</th>
								</tr>
							'; 
			while($row = mysql_fetch_array($sql)){
			$id = $row['pid'];
			$product_name = $row['product_name'];
			$date_added = strftime('%b %d %Y', strtotime($row['date_added']));
			$price = $row['price'];
			$qty = $row['qty'];
			$category = $row['category'];
			$subcategory = $row['subcategory'];
			$details = $row['details'];
			
			$product_list .= '		<tr>
									<td><img class="img-responsive" src="'.IMG_PATH.$id.'.jpg" width="150px" height="150px"></td>
								<td>
								Product ID: '.$id.' <br />
								Product Name: <br/>'.$product_name.' <br />
								PHP '.$price.'  <br /> 
								Quantity: '.$qty.' <br />
								Added:  '.$date_added.'  <br />
								<a href="inventory_edit.php?pid='.$id.'">Edit Product</a> <br/> <a href="inventory_list.php?deleteid='.$id.' ">Delete Product</a><br />
								</td>
								</tr>';
			
			}
				$product_list .= '</table></div>
							<div class="col-md-4"></div>
						  </div>';
		} else {
			$product_list ='Sorry, the product doesn\'t exist.';
			exit(); 
	}
	}
?>