<?php
	namespace Core\Data;
	
	class Controller {
        public $description = "name: controller, namespace Core\Data";
		public function __toString(){
			return $this->description;
		}		
	}
?>