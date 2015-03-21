<?php // Gather this product's full information for inserting automatically into the edit form below on page
	if(isset($_GET['pid'])){
		// This block grabs the whole list for viewing 
		$targetID = $_GET['pid'];
		$sql = mysql_query('SELECT * FROM products WHERE pid = "'.$targetID.'" LIMIT 1');
		$productCount = mysql_num_rows($sql); //count the output amount
		if($productCount > 0){
			while($row = mysql_fetch_array($sql)){
			$id = $row['pid'];
			$product_name = $row['product_name'];
			$date_added = strftime('%b %d %Y', strtotime($row['date_added']));
			$price = $row['price'];
			$qty = $row['qty'];
			$category = $row['category'];
			$subcategory = $row['subcategory'];
			$details = $row['details'];
			
			
			}
		} else {
			echo 'Sorry, the product doesn\'t exist.';
			exit(); 
	}
	}
?>