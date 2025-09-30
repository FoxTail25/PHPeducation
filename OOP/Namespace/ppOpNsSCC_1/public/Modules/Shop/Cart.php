<?php
namespace Modules\Shop;
	
class Cart {
    public $count = 0;

    public function __toString(){
        return $this->count;
    }
		
	}
?>