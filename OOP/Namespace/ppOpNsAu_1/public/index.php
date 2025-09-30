<?php
// Автозагрузка классов в ООП в PHP
namespace Core;
spl_autoload_register();

// use Admin\Controller as C_Admin; - так не работает((
use \Core\Admin\Controller as C_Admin;

echo new User;
echo '<br/>';
echo new C_Admin;
echo '<br/>';
echo new Admin\Controller; // Так работает))
echo '<br/>';
echo new \Project\User\Data;
?>
