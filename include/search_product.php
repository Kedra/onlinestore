<?php
	require_once('../connect/connect.php');
	require_once('../config.php');
	if(isset($_POST['title'])){
	$title = $_POST["title"];

	$dynamicList = ''; 
	$sql = mysql_query("SELECT * FROM products WHERE product_name like '%".$title."%'");
	$productCount = mysql_num_rows($sql);
	if($productCount > 0){
	echo '<table id="tbl" class="table" border="0" cellspacing="0">
				<tr>
					<th>Product Image</th>
					<th>Product Details</th>
				</tr>';
		while($row = mysql_fetch_array($sql)){
			$id = $row['pid'];
			$product_name = $row['product_name'];
			$date_added = strftime('%b %d %Y', strtotime($row['date_added']));
			$price = $row['price'];
			$qty = $row['qty'];
			echo '<tr>
								<td>
									<a href="../'.IMG_PATH.''.$id.'.jpg" ><img width=250px height=250px  src="'.IMG_PATH.''.$id.'.jpg"></a>
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
		echo '<div class="alert alert-info" role="alert">No more results.</div>'; 
	}
}