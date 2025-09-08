<?php
$url = $_SERVER['REQUEST_URI'];
$page = file_get_contents('template/front.html');
$menu = include_once('code/menu.php');

if($url != '/') {
    $content = include_once('pages'.$url);
} else {
    $content = include_once('pages/home.php');
}
$page = str_replace('{{ title }}', $content['title'], $page);
$page = str_replace('{{ menu }}', $menu, $page);
echo str_replace('{{ body }}', $content['body'], $page);
?>