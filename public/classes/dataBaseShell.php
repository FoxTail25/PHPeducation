<?php
	
	// $host = "MySQL-8.0";
	// $user = "root";
	// $pass = "";
	// $baseName = "php_sql_task";
	
	class DatabaseShell {
		private $link;
		
		public function __construct($host, $user, $password, $database) {
			$this->link = mysqli_connect($host, $user, $password, $database);
			mysqli_query($this->link, "SET NAMES 'utf8'");
		}
		public function save($table, $data) {
			// сохраняет запись в базу
			$query = "INSERT INTO $table (name, age, salary) 
		VALUES ('user', 30, 1000)";
		}
		public function del($table, $id) {
			// удаляет запись по ее id
			$query = "";
		}
		public function delAll($table, $ids) {
			// удаляет записи по их id
			$query = "";
		}
		public function get($table, $id) {
			// получает одну запись по ее id
			$query = "SELECT * FROM $table WHERE id = $id";
		}
		public function getAll($table, $ids) {
			// получает массив записей по их id
			$query = "";
		}
		public function selectAll($table, $condition) {
			// получает массив записей по условию
			$query = "";
		}
		private function getRes($query){
			$res = mysqli_query($this->link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
			return $data;
		}
	}
?>