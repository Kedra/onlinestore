<?php // Parse the form data and add inventory item to the system
if(isset($_POST['product_name'])){
	$pid = mysql_real_escape_string($_POST['thisID']);
	$product_name = mysql_real_escape_string($_POST['product_name']);
	$price = mysql_real_escape_string($_POST['price']);
	$qty = mysql_real_escape_string($_POST['qty']);
	$category = mysql_real_escape_string($_POST['brand']);
	$subcategory = mysql_real_escape_string($_POST['type']);
	$details = mysql_real_escape_string($_POST['details']);
	$date = date('Y-m-d');
	// See if that product name is an identical match to another product in the system
	$sql = mysql_query('UPDATE products SET product_name = "'.$product_name.'", price='.$price.', qty='.$qty.',
	details = "'.$details.'", category = "'.$category.'", subcategory = "'.$category.'" WHERE pid = '.$pid.'') or die(mysql_error()); 
	if($_FILES['fileField']['tmp_name'] != ''){
		// Place image in the folder
		$newname = ''.$pid.'.jpg';
		move_uploaded_file($_FILES['fileField']['tmp_name'], '../inventory_images/'.$newname);
	}
	
	else{
		// change image through user's chosen image
	}
	header('location: inventory_list.php');
	exit();
	
	
}
?>