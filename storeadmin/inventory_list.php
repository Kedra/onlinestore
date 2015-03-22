<?php require_once('../config.php'); 
require_once('../include/header.php');
require_once('/admin_include/check_session.php');
require_once('/admin_include/check_error.php'); 
require_once('/admin_include/delete_product.php'); 
require_once('/admin_include/insert_product.php'); 
require_once('/admin_include/select_product_list.php'); ?>
<title>Inventory List</title>
</head>
<body>
<div class="jumbotron">
<div class="container">
<?php require_once('admin_include/admin_nav_log.php'); ?>
	<div align="right" style="margin-right:32px"><a href="inventory_list.php#inventoryForm">Add New Inventory Item</a><br/>
	</div>
	<div align="center"><?php echo $alert;?><h2>Inventory list</h2></div>
	<?php echo $product_list; ?>
	<a name="inventoryForm" id="inventoryForm"></a>
	<h3>&darr;Add New Inventory Item Form&darr;</h3>
	<form action="inventory_list.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
	<table class="table" width="90%" border="1" cellspacing="0" cellpadding="6">
	<tr>
		<td width="20%">Product Name</td>
		<td width="80%"><label>
		<input autofocus="autofocus" name="product_name" type="text" id="product_name" size="64" />
		</label></td>
	</tr>
	<tr>
		<td width="20%">Product Price</td>
		<td width="80%"><label>
		PHP
		<input name="price" type="text" id="textfield" size="12" />
		</label></td>
	</tr>
	<tr>
		<td width="20%">Product Quantity</td>
		<td width="80%">
		<input name="qty" type="text" id="textfield" size="12" maxlength="2" />
		</td>
	</tr>
	<tr>
		<td width="20%">Category</td>
		<td width="80%"><label>
		<select name="brand" id="brand">
		<option value=""></option>
		<option value="Lenovo">Lenovo</option>
		<option value="Asus">Asus</option>
		<option value="Dell">Dell</option>
		<option value="HP">HP</option>
		<option value="Acer">Acer</option>
		</select>
		</label></td>
	</tr>
	<tr>
		<td width="20%">Subcategory</td>
		<td width="80%"><select name="type" id="type">
		<option value=""></option>
		<option value="Laptop">Laptop</option>
		<option value="Notebook">Notebook</option>
		<option value="Netbook">Netbook</option>
		</select>
		</td>
	</tr>
	<tr>
		<td width="20%">Product Details</td>
		<td width="80%"><label>
		<textarea name="details" id="textarea" cols="64" row="5"></textarea>
		</label></td>
	</tr>
	<tr>
		<td width="20%">Product Image</td>
		<td width="80%"><label>
		<input type="file" name="fileField" id="fileField" />
		</label></td>
	</tr>
	<tr>
		<td width="20%">&nbsp;</td>
		<td width="80%"><label>
		<input type="submit" name="button" id="button" value="Add This Item Now" />
		</label></td>
	</tr>
	</table>
	</form>
</div>	
</div>
<?php require_once('admin_include/admin_footer.php'); ?>
<?php require_once('../include/js.php'); ?>
<?php require_once('../include/footer.php'); ?> 