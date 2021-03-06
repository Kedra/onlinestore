<?php // This block grabs the whole list for viewing 
$alert = '';
if(isset($_SESSION['file_exists'])){
	$alert = '<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Same file exists.</div>
			  <br>
			   '.$_SESSION['file_exists'].'';
	unset($_SESSION['file_exists']);
}
if(isset($_SESSION['file_lrg'])){
	$alert = '<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;File too large.</div>';
	unset($_SESSION['file_lrg']);
}
if(isset($_SESSION['bad_ext'])){
	$alert = '<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Upload only .jpg files.</div>
			  <br>
			   '.$_SESSION['bad_ext'].'';
	unset($_SESSION['bad_ext']);
}
if(isset($_SESSION['file_fail'])){
	$alert = '<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Upload unsuccessfully.</div>';
	unset($_SESSION['file_fail']);
}
if(isset($_SESSION['upd_success'])){
	$alert = '<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Uploaded and added successfully.</div>';
	unset($_SESSION['upd_success']);
}
$product_list = '<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4">
							<table id="tbl" class="table" border="0" cellspacing="0">
								<tr>
									<th>Product Image</th>
									<th>Product Details</th>
								</tr>
							'; 
$sql = mysql_query('SELECT * FROM products ORDER BY date_added ASC');
$productCount = mysql_num_rows($sql); //count the output amount
if($productCount > 0){
	while($row = mysql_fetch_array($sql)){
		$id = $row['pid'];
		$product_name = $row['product_name'];
		$date_added = strftime('%b %d %Y', strtotime($row['date_added']));
		$price = $row['price'];
		$qty = $row['qty'];
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
	$product_list = 'You have no products listed in your store yet'; 
}
?>