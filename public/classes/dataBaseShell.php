<?php
	
	// $host = "MySQL-8.0";
	// $user = "root";
	// $password = "";
	// $baseName = "for_php_education";
	
	class DatabaseShell {
		private $link;
		
		public function __construct($host, $user, $password, $database) {
			$this->link = mysqli_connect($host, $user, $password, $database);
			mysqli_query($this->link, "SET NAMES 'utf8'");
		}
		public function save($table, $data) {
			// сохраняет запись в базу
			$userName = $data['name'];
			$userAge = $data['age'];

			$query = "INSERT INTO $table (name, age) VALUES ('$userName', '$userAge')";
			return $this->getRes($query);
		}
		public function del($table, $id) {
			// удаляет запись по ее id
			$query = "DELETE FROM $table WHERE id=$id";
			return $this->getRes($query);
		}
		public function delAll($table, $ids) {
			// удаляет записи по их id
			$answerArr = [];
			foreach($ids as $id){
				$query = "DELETE FROM $table WHERE id=$id";
				$answer = $this->getRes($query);
				$answerArr[$id] = $answer;
			}
			return $answerArr;
		}
		public function get($table, $id) {
			// получает одну запись по ее id
			$query = "SELECT * FROM $table WHERE id = $id";
			return $this->getRes($query);
		}
		public function getAll($table, $ids) {
			// получает массив записей по их id
			$answerArr = [];
			foreach($ids as $id){
				$query = "SELECT * FROM $table WHERE id = $id";
				$answer = $this->getRes($query);
				$answerArr[] = $answer;
			}
			return $answerArr;
		}
		public function selectAll($table, $condition) {
			// получает массив записей по условию
			$query = "";
		}
		private function getRes($query){
			$res = mysqli_query($this->link, $query) or die(mysqli_error($link));
			if(!is_bool($res)){
				for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
				return $data[0];
			}
			return $res;
		}
	}
?>