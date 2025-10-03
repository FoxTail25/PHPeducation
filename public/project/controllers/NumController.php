<?php

namespace Project\Controllers;
use \Core\Controller;

class NumController extends Controller {

    public function nums($params)
    {
        var_dump($params); // ['var1' => 'eee','var2' => 'bbb'] 
    }
	
}

?>