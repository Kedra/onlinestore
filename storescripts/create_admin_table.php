<?php require_once('../connect/connect.php'); 

$sqlCommand = "CREATE TABLE admin(
			id int(11) NOT NULL auto_increment,
			username varchar(24) NOT NULL,
			password varchar(60) NOT NULL,
			last_log_date date NOT NULL,
			PRIMARY KEY (id),
			UNIQUE KEY username(username)
			)";
if(mysql_query($sqlCommand)){
	echo "Your admin table has been created sucessfully!";
} else {
	echo"CRITICAL ERROR: admin table has not been created";
}


?>