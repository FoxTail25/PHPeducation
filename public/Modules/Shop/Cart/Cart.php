<?php
namespace modules\shop\cart;

class Cart{
    public $name = 'modules\shop\cart';

    public function __toString(){
        return $this->name;
    }
}

?>