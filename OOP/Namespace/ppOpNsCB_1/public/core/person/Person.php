<?php
namespace Core\Person;

class Person {
	protected $name;
	protected $age;
	public function __construct($name, $age){
		$this->name = $name;
		$this->age = $age;
	}
	
}

?>