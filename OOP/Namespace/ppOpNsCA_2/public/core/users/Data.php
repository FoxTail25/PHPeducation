<?php
namespace Core\Users;

class Data {
	public $name;
	public function __construct($name){
		$this->name = $name;
		return $this;
	}
	public function __toString(){
		return $this->name;
	}
}