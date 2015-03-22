<?php require_once('../config.php'); 
require_once('/admin_include/check_session.php'); 
require_once('/admin_include/update_product.php');
require_once('/admin_include/view_product.php');
require_once('../include/header.php');?>
	<title>Inventory List</title>
	</head>
	<body>
<div class="jumbotron">
<div class="container">
<?php require_once('admin_include/admin_nav_log.php'); ?>
	<div align="right" style="margin-right:32px"><a href="inventory_list.php#inventoryForm">Add New Inventory Item</a><br/>
	</div>
	<?php echo $product_list; ?>
	<a name="inventoryForm" id="inventoryForm"></a>
	<h3>&darr;Edit Inventory Item Form&darr;</h3>
	<form action="inventory_edit.php"enctype="multipart/form-data" name="myForm" id="myForm" method="post">
	<table class="table" width="90%" border="1" cellspacing="0" cellpadding="6">
	<tr>
		<td width="20%">Product Name</td>
		<td width="80%"><label>
		<input autofocus="autofocus" name="product_name" type="text" id="product_name" size="64" value="<?php echo $product_name ; ?>" />
		</label></td>
	</tr>
	<tr>
		<td width="20%">Product Price</td>
		<td width="80%"><label>
		PHP
		<input name="price" type="text" id="textfield" size="12" value="<?php echo $price ; ?>"/>
		</label></td>
	</tr>
	<tr>
		<td width="20%">Product Quantity</td>
		<td width="80%">
		<input name="qty" value="<?php echo $qty;?>" type="text" id="textfield" size="12" maxlength="2" />
		</td>
	</tr>
	<tr>
		<td width="20%">Category</td>
		<td width="80%"><label>
		<select name="brand" id="brand">
		<option value="<?php echo $category; ?>"><?php echo $category; ?></option>
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
		<option value="<?php echo $subcategory; ?>"><?php echo $subcategory; ?></option> 
		<option value="Laptop">Laptop</option>
		<option value="Notebook">Notebook</option>
		<option value="Netbook">Netbook</option>
		</select>
		</td>
	</tr>
	<tr>
		<td width="20%">Product Details</td>
		<td width="80%"><label>
		<textarea name="details" id="textarea" cols="64" row="5"><?php echo $details; ?></textarea>
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
		<input name="thisID" type="hidden" value="<?php echo $targetID; ?>" />
		<input type="submit" name="button" id="button" value="Make Changes" />
		</label></td>
	</tr>
	</table>
	</form>
</div>
</div>
<?php require_once('admin_include/admin_footer.php'); ?>
<?php require_once('../include/js.php'); ?>
<?php require_once('../include/footer.php'); ?> 