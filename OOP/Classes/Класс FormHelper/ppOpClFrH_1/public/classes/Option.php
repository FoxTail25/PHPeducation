<?php
include_once('classes/origin/Tag.php');

class Option extends Tag {
    public function __construct(){
        parent::__construct('option');
    }
    public function setSelected(){
        $this->setAttr('selected');
        return $this;
    }
    public function setText($text){
        parent::setText($text);
        return $this;
    }
}
?>