<?php

namespace App\Controllers\Admin;

use App\Models\ProductModel;

use App\Controllers\BaseController;

class Product extends BaseController{

  private $productModel;

  public function __construct(){
    $this->productModel = new ProductModel();
  }

    public function listProducts(){
      
      $data = [
        
          'arrayProducts' => $this->productModel->findAll()
      ];

      
      echo view('admin/templates/header');
      echo view('admin/templates/offcanva');
      echo view('admin/products/listProducts',$data);
      echo view('admin/templates/footer');
    }

    public function registerProducts(){
      echo view('admin/templates/header');
      echo view('admin/templates/offcanva');
      echo view('admin/products/registerProducts');
      echo view('admin/templates/footer');

      

   
      $this->productModel->save($this->request->getPost());

    }
    
}