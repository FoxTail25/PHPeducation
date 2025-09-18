<?php
// пространство имён
require_once('core/Controller.php');
require_once('project/Controller.php');

$core = new \Core\Controller;
$project = new \Project\Controller;
echo $core;
echo '<br/>';
echo $project;
?>
