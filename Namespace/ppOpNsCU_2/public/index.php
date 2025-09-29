<?php
// Команда use и пространства имен в ООП в PHP
namespace Project;
include_once('core/users/Data.php');
use \Core\Users\Data;

class Test {
	private $names = [];
	public function __construct(){
		$this->names[] = new Data('user1');
		$this->names[] = new Data('user2');
		$this->names[] = new Data('user3');
	}
	public function getNames(){
		$result ='';
		foreach($this->names as $name){
			$result .= "Имя: $name <br/>";
		}
		return $result;
	}
	public function __toString(){
		return $this->getNames();
	}
}
echo new Test;

?>
