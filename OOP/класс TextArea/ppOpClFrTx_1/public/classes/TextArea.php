<?php
include_once('classes/origin/Tag.php');
class TextArea extends Tag{
    public function __construct(){
        parent::__construct('textarea');
    }
}
?>