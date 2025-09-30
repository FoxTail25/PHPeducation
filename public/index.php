<?php
// Команда use и относительные пути в ООП в PHP
namespace Project\Data;

include_once 'project/data/controller/Page.php';
include_once 'project/data/model/Page.php';

use Project\Data\Controller\Page as C_Page;
use Project\Data\Controller\Page as M_Page;

class Test {
    private $pageController;
    private $pageModel;
    public function __construct() {
        $this->pageController  = new C_Page;
        $this->pageModel       = new M_Page;
        return $this;
    }
    public function __toString(){
        return "$this->pageController
        <br/>
        $this->pageModel";
    }
}
echo new Test;
?>
