<?php
// Псевдонимы классов для пространств имен в ООП в PHP

namespace Project;

include_once('Resource\Controller\Page.php');
include_once('Resource\Model\Page.php');

use \Resource\Controller\Page as C_page;
use \Resource\Model\Page as M_page;

class Test {
	public $pageController;
	public $pageModel;

	public function __construct() {
		$this->pageController  = new C_Page;
		$this->pageModel       = new M_Page;
	}
	public function __toString(){
		return $this->pageController . '<br/>' . $this->pageModel;
	}
}
echo new Test;

?>
