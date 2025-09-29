<?php
namespace Resource\Controller;

class Page {

	public $description = 'namespace:Resource\Controller, class:Page';

	public function __toString(){
		return $this->description;
	}
}

?>