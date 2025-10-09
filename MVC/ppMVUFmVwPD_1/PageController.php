<?php

namespace Project\Controllers;
use \Core\Controller;

class PageController extends Controller {
        private $pages;

        public function __construct(){
            $this->pages = [
                1 => 'страницв 1',
                2 => 'страницв 2',
                3 => 'страницв 3',
            ];
        }
        public function show($params) {
            echo $this->pages[ $params['id']];
        }
        public function act() {
			return $this->render('page/act', [
				'var1' => 'eee',
				'var2' => 'bbb',
				'var3' => 'kkk',
			]);
		}
	
}

?>