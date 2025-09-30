<?php
include_once('classes/origin/Tag.php');
class TextArea extends Tag{
    public function __construct(){
        parent::__construct('textarea');
    }
    public function open(){
        $TextAreaName = $this->getAttr('name');
        if($TextAreaName){
            $textAreaText = $_REQUEST[$TextAreaName];
            if(isset($textAreaText)){
                $this->setText($textAreaText);
            }
        }
        return parent::open();
    }
}
?>