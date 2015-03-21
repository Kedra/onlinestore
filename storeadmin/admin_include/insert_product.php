<?php // Parse the form data and add inventory item to the system
if(isset($_POST['product_name'])){
	$product_name = mysql_real_escape_string($_POST['product_name']);
	$price = mysql_real_escape_string($_POST['price']);
	$qty = mysql_real_escape_string($_POST['qty']);
	$category = mysql_real_escape_string($_POST['brand']);
	$subcategory = mysql_real_escape_string($_POST['type']);
	$details = mysql_real_escape_string($_POST['details']);
	$date = date('Y-m-d');
	// See if that product name is an identical match to another product in the system
	$sql = mysql_query('SELECT pid FROM products WHERE product_name = "'.$product_name.'" LIMIT 1');
	$productMatch = mysql_num_rows($sql); // count the output amount 
	if($productMatch > 0){
		echo 'Sorry, you tried to place a duplicate "Product Name" into the system, <a href="inventory_list.php">Click Here</a>';
		exit();
	}
	// Add this product into the database now
	$sql = mysql_query('INSERT INTO products (product_name, price, qty, details, category, subcategory, date_added) 
	VALUES("'.$product_name.'", "'.$price.'", '.$qty.', "'.$details.'", "'.$category.'", "'.$subcategory.'", "'.$date.'")') or die (mysql_error());
	
	$pid = mysql_insert_id();
	// Place image in the folder
	$newname = ''.$pid.'.jpg';
	move_uploaded_file($_FILES['fileField']['tmp_name'], '../inventory_images/'.$newname);
	header('location: inventory_list.php');
	exit();
}
?>