<?php

namespace App\Controllers\Admin;

use App\Models\ProductModel;

use App\Controllers\BaseController;

class Product extends BaseController{

    public function listProducts(){
      $ProductModel = new ProductModel();
      $data = [
        
          'arrayProducts' => $ProductModel->findAll()
      ];

      
      echo view('admin/templates/header');
      echo view('admin/templates/offcanva');
      echo view('admin/products/listProducts',$data);
      echo view('admin/templates/footer');
    }
    
}