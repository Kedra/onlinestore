<?php
// Check to see there are posted variables coming into the script
if($_SERVER['REQUEST_METHOD'] != 'POST') {die ('No Post Variables')}
// Initialize the $req variable and add cmd key value pair
$req = 'cmd=_notify-validate';
// Read the post from PayPal
foreach($_POST as $key => $value){
	$value = urlencode(stripslashes($value));
	$req .='&$key=$value';
}
// Post information to PayPal's server via curl and validate everything with PayPal
// We use CURL instead of PHP for a universally operable script(fsockopen problems, etc.)
$url = 'https://sandbox.paypal.com/cgi-bin/webscr';
$curl_result=$curl_err='';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(''));
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
$curl_result = @curl_exec($ch);
$curl_err = curl_error($ch);
curl_close($ch);

$req = str_replace('&','\n', $req); // In a nice list

// Check if result verifies

if(strpos($curl_result, 'VERIFIED') != false){
	$req .= '\n\nPayPal Verified OK';
} else{
	$req .= '\n\nData NOT verified from Paypal!';
	mail('kedra1995@gmail.com','IPN interaction not verified',$req,'From: kedra@littlekomp.tk') or die(mysql_error());
	exit();
}

/*Reminders:
	Make sure that business email is returned is your business email
	Transaction's payment status is completed
	No duplicate "txn_id" variable
	Payment amount matches what you charge for items
*/

$receiver_email = $_POST['receiver_email'];
if($receiver_email != 'kedra1995@gmail.com'){
	$message = 'Investigate why and how receiver email is wrong. Email = '.$_POST['receiver_email'].'\n\n\n'.$req.'';
	mail('kedra1995@gmail.com','Receiver Email is incorrect',$message,'From: kedra@littlekomp.tk') or die(mysql_error());
	exit(); 
}

if($_POST['payment_status'] != 'Completed'){
	
}

require_once('connect/connect.php');

$this_txn = $_POST['txn_id'];
$sql = mysql_query('SELECT id FROM transcations WHERE txn_id='.$this_txn' LIMIT 1');
$numRows = mysql_num_rows($sql);
if($numRows > 0){
	$message = 'Duplicate transaction ID occured so we killed the IPN script \n\n\n'.$req.'';
	mail('kedra1995@gmail.com', 'Duplicate txn_id in the IPN system', $message,'From: kedra@littlekomp.tk') or die(mysql_error());
	exit();
}

$product_id_string = $_POST['custom'];
$product_id_string = rtrim($product_id_string,','); // remove last comma
// Explode string, into array, and query prices; add all up and make match the payment_gross amount
$id_str_array = explode(',',$product_id_string); // Uses commma as delimiter(break point)
$fullAmount = 0;
foreach($id_str_array as $key => $value){
	$id_quantity_pair = explode('-', $value) // Uses Hyphen as delimiter to seperate product ID from its quantity
	$product_id = $id_quantity_pair[0]; // Get Product ID
	$product_quantity = $id_quantity_pair[1]; // Get the quantity
	$sql = mysql_query('SELECT price FROM products WHERE pid = '.$product_id.' LIMIT 1');
	while($row = mysql_fetch_array($sql)){
		$product_price = $row['price'];
	}
	$product_price = $product_price * $product_quantity;
	$fullAmount = $fullAmount + $product_price;
}
$fullAmount = number_format($fullAmount,2);
$grossAmount = $_POST['mc_gross'];
if($fullAmount != $grossAmount){
	$message = 'Possible Price Jack: '.$_POST['payment_gross'].' != '.$fullAmount.'\n\n\n.'$req.'';
	mail('kedra1995@gmail.com', 'Price Jack or Bad Programming',$message,'From: kedra@littlekomp.tk') or die(mysql_error());
	exit();
}

$txn_id = $_POST['txn_id'];
$payer_email = $_POST['payer_email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$payment_date = $_POST['payment_date'];
$mc_gross = $_POST['mc_gross'];
$payment_currency = $_POST['payment_currency'];
$receiver_email = $_POST['receiver_email'];
$payment_type = $_POST['payment_type'];
$payment_status = $_POST['payment_status'];
$address_street = $_POST['address_street'];
$address_city = $_POST['address_city'];
$address_state = $_POST['address_state'];
$address_zip = $_POST['address_zip'];
$address_country = $_POST['address_country'];
$address_status =  $_POST['address_status'];
$notify_version = $_POST['notify_version'];
$verify_sign = $_POST['verify_sign'];
$payer_id = $_POST['payer_id'];
$mc_currency = $_POST['mc_currency'];
$mc_fee = $_POST['mc_fee'];
$custom = $_POST['custom'];
// Place the transaction into the database

$sql = mysql_query('INSERT INTO transactions(product_id_array, payer_email, first_name, last_name,
payment_date, mc_gross, payment_currency, txn_id, receiver_email, payment_type, payment_status,
address_street, address_city, address_state, address_zip, address_country, address_status,
notify_version, verify_sign, payer_id, mc_currency, mc_fee)

VALUES('.$custom.','.$payer_mail.','.$first_name.','.$last_name.','.$payment_date.','.$mc_gross.',
'.$payment_currency.','.$txn_id.','.$receiver_email.','.$payment_type.','.$payment_status.',
'.$txn_type.','.$payer_status.','.$address_street.','.$address_city.','.$address_state.',
'.$address_zip.','.$address_country.','.$address_status.','.$notify_version.','.$verify_sign.',
'.$payer_id.','.$mc_curency.','.$mc_fee.'') or die ("unable to execute the query");

mysql_close();
//Mail yourself the details
mail('kedra1995@gmail.com', 'IPN Result success',$req,'From: postmaster@localhost') or die(mysql_error());
?>