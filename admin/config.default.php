<?php

	// DB
	define('DB_DRIVER', 'mysql');
	define('DB_HOSTNAME', 'mysql1052.servage.net');
	define('DB_USERNAME', 'uru-oc');
	define('DB_PASSWORD', 'KonCT01');
	define('DB_DATABASE', 'uru-oc');
	define('DB_PREFIX', '');
	
	$_path = "/path-to-dir/";
    $_webpath = "http://uru.konscript.com/";

	// HTTP
	define('HTTP_SERVER', $_webpath.'admin/');
	define('HTTP_CATALOG', $_webpath);
	define('HTTP_IMAGE', $_webpath.'image/');

	// HTTPS
	define('HTTPS_SERVER', $_webpath.'admin/');
	define('HTTPS_IMAGE', $_webpath.'image/');

	// DIR
	define('DIR_APPLICATION', $_path.'admin/');
	define('DIR_SYSTEM', $_path.'system/');
	define('DIR_DATABASE', $_path.'system/database/');
	define('DIR_LANGUAGE', $_path.'admin/language/');
	define('DIR_TEMPLATE', $_path.'admin/view/template/');
	define('DIR_CONFIG', $_path.'system/config/');
	define('DIR_IMAGE', $_path.'image/');
	define('DIR_CACHE', $_path.'system/cache/');
	define('DIR_DOWNLOAD', $_path.'download/');
	define('DIR_LOGS', $_path.'system/logs/');
	define('DIR_CATALOG', $_path.'catalog/');

?>