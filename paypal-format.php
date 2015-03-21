// into the cart render part of script
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

	<input type="hidden" name="cmd" value="_cart">
	<input type="hidden" name="upload" value="1">
	<input type="hidden" name="business" value="you@youremail.com">
// in the for each
	<input type="hidden" name="item_name_$x" value="XXX">
	<input type="hidden" name="amount_$x" value="XXX">
	<input type="hidden" name="quantity_$x" value="XXX">
// goes below and outside of for each
	<input type="hidden" name="notify_url" value="localhost/projects/My%20%Online%20Store/storescripts/my_ipn.php">
	<input type="hidden" name="return" value="localhost/projects/My%20Online%20Store/checkout_complete.php">
	<input type="hidden" name="rm" value="2">
	<input type="hidden" name="cbt" value="Return To The Store">
	<input type="hidden" name="cancel_return" value="localhost/projects/My%20Online%20Store/paypal_cancel.php">
	<input type="hidden" name="lc" value="US">
	<input type="hidden" name="currency_code" value="USD">
	<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with PayPal - it's easy">
	
</form>
	