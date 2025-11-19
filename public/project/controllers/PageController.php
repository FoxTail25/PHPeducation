<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Page;
	
	class PageController extends Controller	{
		private $pages;

		public function __construct(){
		$this->pages = [
			1 => ['title'=>'page 1', 'text'=>'text 1'],
			2 => ['title'=>'page 2', 'text'=>'text 2'],
			3 => ['title'=>'page 3', 'text'=>'text 3'],
		];

		}

		public function show($param){
			$pageNum = $param['pageNum'];
			$page = $this->pages[$pageNum];
			$this->title = $page['title'];
			return $this->render('page/show', ['page'=>$page]);
		}

		public function test(){
			$page = new Page;
			$data = $page->getById(3);

			$this->title = $data['title'];
			return $this->render('page/test', ['content' => $data]);
		}
	}
?>