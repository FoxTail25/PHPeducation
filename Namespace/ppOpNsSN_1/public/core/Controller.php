<?php
namespace Core;

class Controller {
    public $name = "core";
    public function __toString(){
        return $this->name;
    }
}

?>