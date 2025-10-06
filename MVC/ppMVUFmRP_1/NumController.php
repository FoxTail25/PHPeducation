<?php

namespace Project\Controllers;
use \Core\Controller;

class NumController extends Controller {

    public function num($params) {        
        echo array_sum($params);
    }
	
}

?>