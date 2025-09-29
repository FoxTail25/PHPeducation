<?php
// Команда use и относительные пути в ООП в PHP
namespace Core;
include_once 'core/storage/DataBase.php';


// use Storage\DataBase; 
use Core\Storage\DataBase;

class Model {
	public $database;
	public function __construct() {
		$this->database  = new DataBase;
	}
	public function __toString(){
		return $this->database;
	}
}
echo new Model;

?>
