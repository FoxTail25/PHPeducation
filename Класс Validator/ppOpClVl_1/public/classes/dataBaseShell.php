<?php
	class DatabaseShell
	{
		private $link;
		
		public function __construct($host, $user, $password, $database) {
			$this->link = mysqli_connect($host, $user, $password, $database);
			mysqli_query($this->link, "SET NAMES 'utf8'");
		}
		public function save($table, $data) {
			// сохраняет запись в базу
		}
		public function del($table, $id) {
			// удаляет запись по ее id
		}
		public function delAll($table, $ids) {
			// удаляет записи по их id
		}
		public function get($table, $id) {
			// получает одну запись по ее id
		}
		public function getAll($table, $ids) {
			// получает массив записей по их id
		}
		public function selectAll($table, $condition) {
			// получает массив записей по условию
		}
	}
	
	

?>