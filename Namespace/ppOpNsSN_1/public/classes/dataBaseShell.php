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
			$res = mysqli_query($this->link, $query) or die(mysqli_error($this->link));
			
			$answer['result'] = $res;
			$answer['msg'] = "пользователь $userName записан в базу"; 
			
			return $answer;
		}
		public function del($table, $id) {
			// удаляет запись по ее id
			$query = "DELETE FROM $table WHERE id=$id";
			$check = $this->get($table, $id);
			if(!$check['result']){
				$answer['result'] = false;
				$answer['msg'] = "пользователь с id $id не удалён из базы, т.к. такого пользователя нет."; 
				
				return $answer;
			}
			$res = mysqli_query($this->link, $query) or die(mysqli_error($link));
			
			$answer['result'] = $res;
			$answer['msg'] = "пользователь с id $id успешно удалён из базы"; 
			
			return $answer;
		}
		public function delAll($table, $ids) {
			$resultArr = [];
			foreach($ids as $id){
				$resultArr[] = $this->del($table, $id);			
			} 
			return $resultArr;
		}
		public function get($table, $id) {
			// получает одну запись по ее id
			$query = "SELECT * FROM $table WHERE id = $id";
			$res = mysqli_query($this->link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
			if(!isset($data[0])) {
				$answer['result'] = !$res;
				$answer['msg'] = "пользователь с id $id не найден в базе";
			} else {
				$answer['result'] = true;
				$answer['msg'] = $data[0];	
			}
			return $answer;
		}
		public function getAll($table, $ids) {
			// получает массив записей по их id
			$answerArr = [];
			foreach($ids as $id){
				$answerArr[] = $this->get($table, $id);
			}
			return $answerArr;
		}
		public function selectAll($table, $condition) {
			// получает массив записей по условию
			$query = "SELECT * FROM $table $condition";
			$res = mysqli_query($this->link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
			$answerArr = [];
			if(!isset($data[0])) {
				$answerArr = ['result' => false, 'msg' => "пользователи с такими условиями поиска не найдены в базе"];
			} else {
				$answerArr['result'] =  true;
				foreach($data as $userData){
					$answerArr[] = $userData;
				}
			}
			return $answerArr;
		}

	}
?>