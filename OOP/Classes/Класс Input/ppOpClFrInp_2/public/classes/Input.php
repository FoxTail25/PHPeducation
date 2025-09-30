<?php
include_once('classes/origin/Tag.php');
class Input extends Tag{
    public function __construct(){
        parent::__construct('input');
    }
    public function __toString(){
        return parent::open();
    }
}
?>