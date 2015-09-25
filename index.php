<?php

$line = date('Y-m-d H:i:s');
//fdgvhjljkjfjbn//
$ipAddress = $_SERVER['REMOTE_ADDR'];

if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
    $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
}

if ((strcmp($ipAddress, '10.4.32.59') != 0) and (strcmp($ipAddress, '10.4.192.228') != 0) ) {
	
	$line .= " - " . $ipAddress . " - " . $_SERVER['HTTP_USER_AGENT'] . " -- " . $_SERVER['REMOTE_PORT'];
	file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);
}

?>
