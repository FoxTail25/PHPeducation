<?php
namespace Project\Models;
use \Core\Model;

class Product extends Mode {
    	public function getById($id) {
			return $this->findOne("SELECT * FROM product WHERE id=$id");
		}
		
		public function getAll(){
			return $this->findMany("SELECT * FROM product");
		}
}



?>