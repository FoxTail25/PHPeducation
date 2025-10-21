<?php
namespace Project\Controllers;
use Core\Controller;

class TestController extends Controller{
    public function act1(){
        $this->title = "act_1";
        return $this->render('test/act1');
    }
    public function act2(){
        $this->title = "act_2";
        // echo 'act2';
        return $this->render('test/act2');
    }
    public function act3(){
        $this->title = "act_3";
        // echo 'act3';
        return $this->render('test/act3');
    }
    public function act(){
        $this->title = 'Действие act, контроллера test';

        return $this->render('test/act', [
            'var1' => 'eee',
            'var2' => 'bbb',
            'var3' => 'kkk',
        ]);
    }
}

?>



