<?php
namespace core\user;
use Core\Person\Person as person;

class user extends person {
	private $right = 'standart';

	public function __toString(){
		$result = "name: $this->name, age: $this->age, right: $this->right";
		return $result;
	}
}

?>