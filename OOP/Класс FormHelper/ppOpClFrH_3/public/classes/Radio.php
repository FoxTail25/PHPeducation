<?php
include_once('classes/origin/Tag.php');

class Radio extends Tag {
    public function __construct() {
        parent::__construct('input');
        $this->setAttr('type','radio');
    }
    public function open(){
        $radioName = $this->getAttr('name');

            if(isset($_REQUEST[$radioName])){
                $value = $_REQUEST[$radioName];
                if($value == $this->getAttr('value')){
                    $this->setAttr('checked');
                } else {
                    $this->removeAttr('checked');
                }
            }
            return parent::open();
    }
    public function __toString() {
        return $this->open();
    }
}

?>