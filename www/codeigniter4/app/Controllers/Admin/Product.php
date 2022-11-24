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
    
    public function consultProducts($idProduct){
      if($this->productModel->find([$idProduct])){
        $data = [
          'arrayProducts' => $this->productModel->find([$idProduct])
        ];

        echo view('admin/templates/header');
        echo view('admin/templates/offcanva');
        echo view('admin/products/updateProducts',$data);
        echo view('admin/templates/footer');

        $this->updateProducts($idProduct);

      }else{
        echo ("Id de usuário não encontrado");
      }
    }

    public function updateProducts($idProduct){ 

      $data = [
          'name' => $this->request->getPost('name'),
          'price' => $this->request->getPost('price'),
          'description' => $this->request->getPost('description'),
          'idCategory' => $this->request->getPost('category')
      ];
      $this->productModel->update($idProduct,$data);

      return redirect()->to(base_url('admin/listProducts'));  
    }

    public function deleteProducts($idProduct){
      $this->productModel->delete($idProduct);
      // return redirect()->to(base_url('admin/listProducts'));  
    }
    
}