<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Product extends Model {
		// private $tableName = 'product';

		public function getById($id) {
			return $this->findOne("SELECT * FROM product WHERE id=$id");
		}
		public function getAll() {
			return $this->findMany("SELECT * FROM product");
		}

	}