<?php
namespace Project\Data\Controller;

class Page {
    private $description = 'Class: Page, namespace: Project\Data\Controller';
    public function __toString(){
        return $this->description;
    }
}
?>