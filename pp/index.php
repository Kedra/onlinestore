<?php

// Paypal IPN
// http://littlekomp.tk

/**
1. A user buys something from your buy button
2. The buy button is configured with a URL for PayPal to go to when complete
3. The callback is on our page. It queries Paypal to see the result of the 
transaction just made
4. If it is good, we update some kind of record.

*/ 

require_once('ipn.php');
$paypal = new ipn('sandbox'); 
$paypal->run();
?>