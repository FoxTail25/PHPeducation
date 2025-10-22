<?php
	namespace Core;
	
	class Router {

		private $routes;

		public function getTrack($routes, $uri) {
			foreach ($routes as $route) {
				$pattern = $this->createPattern($route->path); // see method description
				
				$uri = $this->addSlash($uri);  // Добавляем слеш в конце адреса, если его нет
				/*
					Проверяет, соответствует ли URI регулярному выражению.
					Если URI соответствует регулярному выражению, $params будет содержать параметры.
				*/
				if (preg_match($pattern, $uri, $params)) {
					$params = $this->clearParams($params);  // очистить параметры из элементов с цифровыми ключами
					return new Track($route->controller, $route->action, $params);
				}
			}
			
			return new Track('error', 'notFound');
		}
		
		/*
			Метод преобразует путь из маршрута в шаблон регулярного выражения,
			заменяя параметры маршрута именованными группами захвата.

			Например, из адреса '/test/:var1/:var2/' метод
			создаст регулярное выражение '#^/test/(?<var1>[^/]+)/(?<var2>[^/]+)/?$#'
		*/
		private function createPattern($path) {

			return '#^' . preg_replace('#/:([^/]+)#', '/(?<$1>[^/]+)', $path) . '/?$#';
		}
		
		private function clearParams($params) {
			$result = [];
			
			foreach ($params as $key => $param) {
				if (!is_int($key)) {
					$result[$key] = $param;
				}
			}
			
			return $result;
		}
		private function addSlash($path){
			$lastSimbol = substr($path, -1);
			if($lastSimbol != '/') {
				$path .= '/';
			}
			return $path;
		}
	}
	