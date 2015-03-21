<?php	
	date_default_timezone_set('Asia/Manila');
	
	$protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';
	$host_name = $_SERVER['HTTP_HOST'];
	$project_folder = 'onlinestore/';
	
	define('HTTP_ROOT', $protocol.$host_name.'/'.$project_folder);
    // for live server
	// define('ADMIN_DIR', '/home/username/public_html/onlinestore/storeadmin/');
	define('ADMIN_DIR', HTTP_ROOT.'storeadmin/');
	define('IMG_PATH', HTTP_ROOT.'inventory_images/');
	define('JS_PATH', HTTP_ROOT.'js/');
	define('CSS_PATH', HTTP_ROOT.'css/');
	define('ICON_PATH', HTTP_ROOT.'icons/');
	define('IMAGES', HTTP_ROOT.'images/');
?>	