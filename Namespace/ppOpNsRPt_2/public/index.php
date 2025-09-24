<?php
// Относительные пути в пространстве имен в ООП в PHP
	namespace Core\Data;
	include_once('Core/Data/Controller.php');
	include_once('Core/Data/Model.php');
	
	$controller = new Controller;
	$model      = new Model;
	echo $controller.'<br/>';
	echo $model;
?>
