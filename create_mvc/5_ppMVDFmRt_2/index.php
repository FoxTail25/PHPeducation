<?php
	namespace Core;
	
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');

	spl_autoload_register(function($class) {
			preg_match('#(.+)\\\\(.+?)$#', $class, $match);
			
			$nameSpace = str_replace('\\', DIRECTORY_SEPARATOR, strtolower($match[1]));
			$className = $match[2];
			
			$path = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . $nameSpace . DIRECTORY_SEPARATOR . $className . '.php';
			
			if (file_exists($path)) {
				require_once $path;
				
				if (class_exists($class, false)) {
					return true;
				} else {
					throw new \Exception("Класс $class не найден в файле $path. Проверьте правильность имени класса в указанном файле.");
				}
			} else {
				throw new \Exception("Файл $path не найден для класса $class. Проверьте, существует ли файл по указанному пути. Убедитесь, что пространство имён вашего класса совпадает с тем, которое фреймворк пытается найти для этого класса. Например, вы создаёте класс модели, но забыли использовать его через use. В этом случае вы пытаетесь вызвать класс модели в пространстве имён контроллера, а такого файла не существует.");
			}
			// Отличие загрузки классов в том, что имена первых частей namespace ("Core" и "Projec") будут переведены в нижний регистр, перед тем как загрузить файл калсса. Так же при отсутсвтии файла с указанным классом будет выведена соответствующее сообщение об ошибке.
	});

	$routes = require $_SERVER['DOCUMENT_ROOT'] . '/project/config/routes.php';

	var_dump($routes);
	
	

?>