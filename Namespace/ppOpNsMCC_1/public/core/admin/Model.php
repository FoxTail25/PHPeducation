<?php

namespace Core\Admin;

class Model {
    public $description = 'class Model';

    public function __toString(){
        return $this->description;
    }
}


?>