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
            $userNumber = $user['n'];
            if($userNumber > 0 and $userNumber < 6) {
                $user = $this->users[$userNumber];
                var_dump($user);
            } else {
                echo "такого пользователя нет";
            }
        }
        public function all(){
            foreach($this->users as $user) {

            }
        }

	}
