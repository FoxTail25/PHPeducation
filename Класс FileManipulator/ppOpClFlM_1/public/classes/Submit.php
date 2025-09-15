<?php
include_once('classes/Input.php');
class Submit extends Input {
    public function __construct(){
        $this->setAttr('type','submit');
        parent::__construct();
    }
}

?>