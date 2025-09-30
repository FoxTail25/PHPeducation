<?php
namespace Modules\Shop\Core;

class Cart {
    public $description = "name:Cart, namespace:Modules/Shop/Core";
    public function __toString(){
        return $this->description;
    }
}


?>