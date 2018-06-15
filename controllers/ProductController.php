<?php
namespace App\Controllers;
use App\Core\DatabaseConnection;
use App\Models\CategoryModel;
use App\Core\Controller;
use App\Models\ProductModel;

class ProductController extends Controller{

public function show($id){
   
    $productModel= new  ProductModel($this->getDatabaseConnection());
    $product=$productModel->getById($id);

    
    $this->set('product',$product);


}




}