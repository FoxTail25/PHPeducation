<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Hello;
	
	class UserController extends Controller {
        private $users;        
        public function __construct(){
            $this->users = [
                1 => ['name'=>'user1', 'age'=>'23', 'salary' => 
                    1000], 
                2 => ['name'=>'user2', 'age'=>'24', 'salary' => 
                    2000], 
                3 => ['name'=>'user3', 'age'=>'25', 'salary' => 
                    3000], 
                4 => ['name'=>'user4', 'age'=>'26', 'salary' => 
                    4000], 
                5 => ['name'=>'user5', 'age'=>'27', 'salary' => 
                    5000], 
            ];
        }
        public function user($user){
            $userNumber = $user['id'];
            if($userNumber > 0 and $userNumber < 6) {
                $result = $this->getUserData($userNumber);
                echo $result;
            } else {
                echo "такого пользователя нет";
            }
        }
        public function all(){
            $result = "";
            $keys = array_keys($this->users);
            foreach($keys as $key) {
                $result .= $this->getUserData($key);
                $result .= "<br/>";
                $result .= "<br/>";
            }
            echo $result;
        }
        private function getUserData($userNumber) {
            $user = $this->users[$userNumber];
                $user = $this->users[$userNumber];
                $result ='';
                $result .= "Имя: $user[name]";
                $result .= "<br/>";
                $result .= "Имя: $user[age]";
                $result .= "<br/>";
                $result .= "Имя: $user[salary]";
                return $result;
        }
	}
