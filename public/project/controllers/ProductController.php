<?php
namespace Project\Controllers;
use Core\Controller;
use \Project\Models\Product;

class ProductController extends Controller {
    
    public function one($params){
        $idProduct = $params['pn'];

        $page = (new Product) -> getById($idProduct);

        $this->title = $page['name'];

        return $this->render('product/one', ['page' => $page]);
    }
    public function all(){

        $pages = (new Product) -> getAll();

        $this->title = 'Список всех продуктов';

        return $this->render('product/all', ['h1'=>'список продуктов','products' => $pages]);
    }
    
    
    
    
    
    
    
    // private $products;

    // public function __construct() {
    //     $this->products = [
    //         1 => [
    //                 'name'     => 'product1',
    //                 'price'    => 100,
    //                 'quantity' => 5,
    //                 'category' => 'category1',
    //             ],
    //             2 => [
    //                 'name'     => 'product2',
    //                 'price'    => 200,
    //                 'quantity' => 6,
    //                 'category' => 'category2',
    //             ],
    //             3 => [
    //                 'name'     => 'product3',
    //                 'price'    => 300,
    //                 'quantity' => 7,
    //                 'category' => 'category2',
    //             ],
    //             4 => [
    //                 'name'     => 'product4',
    //                 'price'    => 400,
    //                 'quantity' => 8,
    //                 'category' => 'category3',
    //             ],
    //             5 => [
    //                 'name'     => 'product5',
    //                 'price'    => 500,
    //                 'quantity' => 9,
    //                 'category' => 'category3',
    //             ],
    //     ];
    // }
    // public function show($params){
    //     $productNumber = $params['pn'];
    //     $product = $this->products[$productNumber];

    //     $this->title = "product № $productNumber";
        
    //     return $this->render('product/show',['product' => $product]);
    // }
    // public function all(){
    //     $this->title = "all products";
    //     return $this->render('product/all',['products' => $this->products]);
    // }
}

?>



