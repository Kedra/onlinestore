<?php // Delete Item Question to Admin and Delete Product if they choose
	if(isset($_GET['deleteid'])){
		echo 'Do you really want to delete product with ID of '.$_GET['deleteid'].' ? <a href="inventory_list.php?yesdelete='.$_GET['deleteid'].'">Yes</a> | <a href="inventory_list.php">No</a>', exit();
	}
	
	if(isset($_GET['yesdelete'])){
		// remove item from system and delete its picture
		// delete from database 
		$id_to_delete = $_GET['yesdelete'];
		$sql = mysql_query('DELETE FROM products WHERE pid = "'.$id_to_delete.'" LIMIT 1') or die (mysql_error());
		// unlink the image from server
		$pictodelete = ('../inventory_images/'.$id_to_delete.'.jpg');
		if(file_exists($pictodelete)) {
			unlink($pictodelete);
		}
		header('location: inventory_list.php');
		exit();
		
	}	
?>