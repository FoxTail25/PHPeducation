<?php
namespace Project\User;

class Data {
	private $description = 'class: Data, namespace: Project\User';
	public function __toString(){
		return $this->description;
	}
}
?>