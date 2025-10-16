<?php

namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Page;

class PageController extends Controller {
        private $pages;

        public function __construct(){
            $this->pages = [
                1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
                2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
                3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
            ];
        }
        public function show($params) {
            $page = $this->pages[ $params['id']];
            $this->title = $page['title'];
            return $this->render('page/show', ['text'=> $page['text']]);
        }
        public function act() {
			return $this->render('page/act',[
                'header' => 'список юзеров',
				'users'  => ['user1', 'user2', 'user3'],
			]);
		}
        public function show1(){
            $this->title = "show 1";

            return $this->render('page/show1');
        }
        public function show2(){
            $this->title = "show 2";
            return $this->render('page/show2');
        }
        public function test(){
            $page = new Page;

            $data = $page->getById(3); // получим запись с id=3
			var_dump($data);
			
			$data = $page->getById(5); // получим запись с id=5
			var_dump($data);
			
			$data = $page->getByRange(2, 5); // записи с id от 2 до 5
			var_dump($data);
        }
        
	
}

?>