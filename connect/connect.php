<?php
	$con = mysql_connect('localhost', 'root', 'sa');
	
	if(! $con) {
		die('Unable to connect to database. Error: '.mysql_error());			
	}
	
	$db = mysql_select_db('mystore');	
	
	if(!$db){
		die('Unable to connect to select database. Error: '.mysql_error());
	}
?>