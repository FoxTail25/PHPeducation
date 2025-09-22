<?php
// Упрощенное обращение к пространствам имен в ООП в PHP
include_once('Modules\Shop\Cart.php');
include_once('Modules\Shop\UserCart.php');

$userCart = new Modules\Shop\UserCart;
echo $userCart;
?>
