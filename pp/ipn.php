<?php 

class ipn
{
	/*&& @var string $_url the paypal url to go to through curl_close
	private $_url;*
	/**
	* @param string $mode 'live' or 'sandbox'
	*/
	
	public function _construct()
	{	
		if($mode == 'live'){
			$this->_url = 'https://www.paypal.com/cgi-bin/webscr';
		}
		
		else{
			$this->_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
		}
		
	}
	
	public function run()
	{
		
		$postFields ='cmd=_notify-validate';
		foreach($_POST as $key => $value)
		{
			$postFields .= '&$key='.urlencode($value);
		}
		$ch = curl_init();
		 
		curl_setopt_array($ch, array(
			CURLOPT_URL => $this->_url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $postFields
		));
		
		
		$result = curl_exec($ch); echo curl_error($ch);
		curl_close($ch);
		
		echo $result;
	}
	
	
	
	
}

?>