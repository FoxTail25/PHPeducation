<?php

namespace Project\Controllers;
use \Core\Controller;

class NumController extends Controller {

    public function sum($params) {        
        $result = array_sum($params);

        $this->title = 'сумма чисел';
        
        return $this->render('num/sum', ['res' => $result]);
    }
	
}

?>