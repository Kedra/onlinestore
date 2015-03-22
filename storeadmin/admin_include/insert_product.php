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
	
	// Place image in the folder
	
	$target_dir = '../inventory_images/';
	$target_file = $target_dir . basename($_FILES["fileField"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	$error = '';
	if (file_exists($target_file)) {
	$_SESSION['file_exists'] = $target_file;
    header('location: inventory_list.php');
	exit();
	}
	if ($_FILES["fileField"]["size"] > 25000000000) {
	$_SESSION['file_lrg'] = '';
	header('location: inventory_list.php');
	exit();
	}
	if($imageFileType != "jpg" && $imageFileType != "jpeg") {
	$_SESSION['bad_ext'] = $target_file;
	header('location: inventory_list.php');
	exit();
	}
	if (! empty($error)) {	
	$_SESSION['file_fail'] = '';
	header('location: inventory_list.php');
	exit();
	// if everything is ok, try to upload file
	} else {			
	// Add this product into the database now
	$sql = mysql_query('INSERT INTO products (product_name, price, qty, details, category, subcategory, date_added) 
	VALUES("'.$product_name.'", "'.$price.'", '.$qty.', "'.$details.'", "'.$category.'", "'.$subcategory.'", "'.$date.'")') or die (mysql_error());
	$pid = mysql_insert_id();
	$newname = $pid;
	$full_dir = $target_dir.$newname.'.'.$imageFileType;
	move_uploaded_file($_FILES['fileField']['tmp_name'], $full_dir);
	$_SESSION['upd_success'] = '';
	header('location: inventory_list.php');
	exit();
	}
	

}
?>