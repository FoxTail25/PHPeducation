<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class PageController extends Controller	{

		public function show1(){
			return $this->render('page/show', [ 'users' => ['user1','user2', 'user3']
		]);
		}
		public function show2(){
			echo 'it ia my-page 2';
		}
		
	}
?>