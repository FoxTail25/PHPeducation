<?php
	namespace Core\Data;
	
	class Model {
        public $description = "name: model, namespace Core\Data";	
		public function __toString(){
			return $this->description;
		}	
	}
?>