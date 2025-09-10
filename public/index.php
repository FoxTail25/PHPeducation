<?php
include_once('classes/CookieShell.php');

	$csh = new CookieShell;
	$csh->set('test', '123', 3600 * 24);
	
	echo $csh->get('test'); // выведет 123
?>