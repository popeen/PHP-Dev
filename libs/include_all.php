<?php

	function require_if_exists($str){
		$file = dirname(__FILE__) . $str;
		if(file_exists($file)){
			require_once $file;
		}
	}

	//https://51degrees.com/support/documentation/php
	require_if_exists('/51Degrees/core/51Degrees.php');
	
	//http://raveren.github.io/kint/
	require_if_exists('/kint/Kint.class.php');
	
	//http://popeen.com/docs/PHPMailer/
	require_if_exists('/PHPMailer/PHPMailerAutoload.php');
	
	//https://github.com/php-curl-class/php-curl-class/tree/master/examples
	require_if_exists('/php-curl-class/src/Curl/CaseInsensitiveArray.php');
	require_if_exists('/php-curl-class/src/Curl/Curl.php');
	require_if_exists('/php-curl-class/src/Curl/MultiCurl.php');
	
	//http://popeen.com/docs/Kakadua%20PHP%20Snippets/
	require_if_exists('/PHP-Snippets/include_functions.php');

?>