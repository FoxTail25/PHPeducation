<?php
$menu = include_once('code/menu.php');
$url = $_SERVER['REQUEST_URI'];

if($url != '/') {
    $page = include_once('pages'.$url);
} else {
    $page = include_once('pages/home.php');
}
echo $menu;
echo $page;
?>