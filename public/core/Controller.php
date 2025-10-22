<?php
	namespace Core;
	
	class Controller
	{
		protected function render($view, $data) {
			return new Page($this->layout, $this->title, $view, $data);
		}
	}
?>