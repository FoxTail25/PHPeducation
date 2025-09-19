<?php
// пространство имён
require_once('Modules/Cart/Cart.php');
require_once('Modules/Shop/Cart/Cart.php');

$cart = new Modules\Cart\Cart;
$shop = new Modules\Shop\Cart\Cart;
echo $cart;
echo '<br/>';
echo $shop;
?>
