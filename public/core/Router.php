<?php
	namespace Core;
	
	class Router {
		
		public function getTrack($routes, $uri)	{
            foreach($routes as $route){
                $pattern = $this->createPattern($route->path);

                // if (проверка соответствия роута и URI) {
				// 	$params = ; // нужно получить параметры из uri
				// 	return new Track($route->controller, $route->action, $params);
				// }
            }
        }
    
        private function createPattern($path) {
			return '#^' . preg_replace('#/:([^/]+)#', '/(?<$1>[^/]+)', $path) . '/?$#';
		}
	}
?>