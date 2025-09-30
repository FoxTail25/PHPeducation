<?php
namespace Project\Data\Model;

class Page {
    private $description = 'Class: Page, namespace: Project\Data\Model';
    public function __toString(){
        return $this->description;
    }
}
?>