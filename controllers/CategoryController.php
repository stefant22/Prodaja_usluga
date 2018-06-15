<?php
namespace App\Controllers;
use App\Core\DatabaseConnection;
use App\Models\CategoryModel;
use App\Core\Controller;
use App\Models\ProductModel;

class CategoryController extends Controller{

public function show($id){
    $categoryModel= new CategoryModel($this->getDatabaseConnection());
    $category= $categoryModel->getById($id);
    $productModel= new  ProductModel($this->getDatabaseConnection());
    $productsInCategory=$productModel->getAllByCategoryId($id);

    $this->set('category',$category);
    $this->set('productsInCategory',$productsInCategory);


}

public function lowToHigh($id){
    $categoryModel= new CategoryModel($this->getDatabaseConnection());
    $category= $categoryModel->getById($id);
    $productModel= new  ProductModel($this->getDatabaseConnection());
    $productsInCategory=$productModel->getAllByCategoryIdPriceLow($id);
    
    $this->set('category',$category);
    $this->set('productsInCategory',$productsInCategory);


}

public function highToLow($id){
    $categoryModel= new CategoryModel($this->getDatabaseConnection());
    $category= $categoryModel->getById($id);
    $productModel= new  ProductModel($this->getDatabaseConnection());
    $productsInCategory=$productModel->getAllByCategoryIdPriceHigh($id);
    
    $this->set('category',$category);
    $this->set('productsInCategory',$productsInCategory);


}


}