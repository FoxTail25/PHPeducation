<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Hello;
	
	class HelloController extends Controller
	{
		public function index() {
			$this->title = 'The framework is working!';
			
			$hello = new Hello; // test model for database check
			
			return $this->render('hello/index');
		}
	}
