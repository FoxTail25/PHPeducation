<?php
include_once('classes/origin/Tag.php');

class Select extends Tag {
    private $items = [];
    public function __construct(){
        parent::__construct('select');
    }
    public function add(Option $item){
        $this->items[] = $item;
        return $this;
    }
    public function show(){
        return $this->open().$this->getItem().$this->close();
    }
    private function getItem(){
        $result = '';
        foreach($this->items as $item){
            $result .=$item->show();
        }
        return $result;
    }
}
?>