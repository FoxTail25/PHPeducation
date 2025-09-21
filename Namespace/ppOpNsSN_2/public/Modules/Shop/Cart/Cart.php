<?php
namespace Modules\Shop\Cart;

class Cart{
    public $name = 'modules\shop\cart';

    public function __toString(){
        return $this->name;
    }
}

?>