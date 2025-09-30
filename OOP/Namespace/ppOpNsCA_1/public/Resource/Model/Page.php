<?php
namespace Resource\Model;

class Page {

	public $description = 'namespace:Resource\Model, class:Page';

	public function __toString(){
		return $this->description;
	}
}

?>