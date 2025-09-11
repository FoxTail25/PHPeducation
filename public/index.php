<?php
include_once('classes/CookieShell.php');

	$csh = new CookieShell;
	$countName = 'pageCount';
	$lifeTime=60*60*60; //(1 hour)
	
	if($csh->get($countName) != '0') {
		$countValue = $csh->get($countName);
		$countvalue = $countValue++;
		$csh->set($countName, $countValue, $lifeTime);
	} else {
		$csh->set($countName, '0', $lifeTime);
	}

	echo "счётчик: ".($csh->get($countName));

	
?>