<?php
	namespace Core;
	
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');

	spl_autoload_register(function ($class){
		echo $class;
		echo '<br/>';
		preg_match('#(.+)\\\\(.+?)$#', $class, $match);
		var_dump($match);
		echo '<br/>';
		require $class . '.php';
	});
	
	echo (new Test);
	// spl_autoload_register(function($class) {
	// 		preg_match('#(.+)\\\\(.+?)$#', $class, $match);
			
	// 		$nameSpace = str_replace('\\', DIRECTORY_SEPARATOR, strtolower($match[1]));
	// 		$className = $match[2];
			
	// 		$path = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . $nameSpace . DIRECTORY_SEPARATOR . $className . '.php';
			
	// 		if (file_exists($path)) {
	// 			require_once $path;
				
	// 			if (class_exists($class, false)) {
	// 				return true;
	// 			} else {
	// 				throw new \Exception("Class $class not found in file $path. Check the correctness of the class name inside the specified file.");
	// 			}
	// 		} else {
	// 			throw new \Exception("File $path not found for class $class. Check if the file exists at the specified path. Make sure that your class's namespace matches the one the framework is trying to find for this class. For example, you are creating a model class but forgot to use it via use. In this case, you are trying to call a model class in the controller's namespace, and such a file does not exist.");
	// 		}
	// 	});
?>