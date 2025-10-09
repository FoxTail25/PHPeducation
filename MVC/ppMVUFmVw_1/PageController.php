<?php

namespace Project\Controllers;
use \Core\Controller;

class PageController extends Controller {
        private $pages;

        public function show($params) {
            echo $this->pages[ $params['id']];
        }
        public function act() {
			return $this->render('page/act');
		}
}

?>