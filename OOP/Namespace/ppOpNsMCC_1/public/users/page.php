<?php
	namespace Users;
	include_once('core\admin\data.php');
	use \Core\Admin\Data;
	
	class Page {
		public $summ = 0;
		public function __construct() {
			$this->summ += (new Data(1))->getNum();
			$this->summ += (new Data(2))->getNum();
		}
		public function __toString(){
			return $this->summ;
		}
	}

?>