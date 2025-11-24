<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Product;	

	class ProductController extends Controller	{

		public function show($param){
			$productId = $param['id'];
			$page = new Product;
			$data = $page->getById($productId);
			$this->title = 'Product'.$data['id'];			
			return $this->render('product/show', ['product' => $data]);
		}
		public function all($param){
			$this->title = "все продукты";
			$page = new Product;
			$data = $page->getAll($productId);
			return $this->render('product/all', ['products' => $data]);
		}
		
		private function getProduct($key){
			return $this->products[$key];
		}
	}
?>