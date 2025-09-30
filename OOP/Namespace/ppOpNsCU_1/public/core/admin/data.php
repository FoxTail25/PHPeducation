<?php
	namespace Core\Admin;
	
	class Data {
		public int $num;
		public function __construct(int $num) {
			$this->num = $num;
		}
		public function getNum(){
			return $this->num;
		}
	}
?>