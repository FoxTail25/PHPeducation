<?php
include_once('classes/SessionShell.php');

$ssh = new SessionShell;
$countName = 'sessionCount';


if($ssh->exists($countName)){
	$countValue = $ssh->get($countName);
	$countValue++;
	$ssh->set($countName, $countValue);
} else {
	$ssh->set($countName, 0);
}

if($ssh->exists($countName)){
	echo "Обновлений страницы: ".$ssh->get($countName);
}
	
?>