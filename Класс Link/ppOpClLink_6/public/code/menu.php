<?php
include_once('classes/Link.php');
$linkArr = [
    'one'=>'/1.php',
    'two'=>'/2.php',
    'three'=>'/3.php',
    'four'=>'/4.php',
    'five'=>'/5.php',
];
$menu = '<nav>';
foreach($linkArr as $key => $value) {
    $menu .= (new Link())->setText($key)->setAttr('href', $value)->show().' ';
}
$menu .= '</nav>';
return $menu
?>