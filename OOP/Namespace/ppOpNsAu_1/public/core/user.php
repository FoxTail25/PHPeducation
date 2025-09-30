<?php
namespace Core;

class User {
	private $description = 'class: User, namespace: Core';
	public function __toString(){
		return $this->description;
	}
}
?>