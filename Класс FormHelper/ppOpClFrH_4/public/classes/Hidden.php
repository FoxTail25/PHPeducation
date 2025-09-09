<?php
include_once('classes/Input.php');
class Hidden extends Input {
    public function __construct(){
        $this->setAttr('type','hidden');
        parent::__construct();
    }
       public function open() {
      return Tag::open();
    }
}
?>