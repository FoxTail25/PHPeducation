<?php
// Своя функция для автозагрузки классов в ООП в PHP
spl_autoload_register(function($class) {
	$root = $_SERVER['DOCUMENT_ROOT'];
	$ds = DIRECTORY_SEPARATOR;
	
	$filename = $root . $ds . str_replace('\\', $ds, $class) . '.php';
	require($filename);
});

use Core\User\User as User;


$user = new User('Ivan', 22);
echo $user;
?>
