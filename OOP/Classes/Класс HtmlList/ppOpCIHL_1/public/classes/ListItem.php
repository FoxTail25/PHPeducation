<?php
include_once('classes/origin/Tag.php');

class ListItem extends Tag {
    public function __construct(){
        parent::__construct('li');
    }
}


?>