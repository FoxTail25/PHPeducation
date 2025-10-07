<?php 

namespace Project\Controllers;
use \Core\Controller;

class UserController extends Controller {
	    private $users;
		private $user;

        public function __construct(){
			$this->users = [
				1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
				2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
				3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
				4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
				5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
			];
        }
        public function show($params){
			$userId = $params['id'];
			$this->user = $this->users[$userId];
			$result = "Имя: {$this->user['name']} Возраст: {$this->user['age']} Зарплата: {$this->user['salary']}";
				$result .="<br/>";
			echo $result;

        }
		public function info($params){
			$id = $params['id'];
			$key = $params['key'];

			echo $this->users[$id][$key];
		}
		public function all(){
			$result = "";
			foreach($this->users as $user){
				$result .= "Имя: {$user['name']} Возраст: {$user['age']} Зарплата: {$user['salary']}";
				$result .="<br/>";
			}
			echo $result;
		}
		public function first($params){
			$count = $params['n'];
			if($count > count($this->users)){
				$count = count($this->users);
			}
			$result ='';
			for($i = 1; $i <= $count; $i++){
				$result .= "Имя: {$this->users[$i]['name']} Возраст: {$this->users[$i]['age']} Зарплата: {$this->users[$i]['salary']}";
				$result .="<br/>";
			}
			echo $result;
		}
	}

?>