<?php

namespace App\Controllers\Admin;

use App\Models\ContactModel;

use App\Controllers\BaseController;

class Contact extends BaseController{

  private $contactModel;

  public function __construct(){
    $this->contactModel = new ContactModel();
  }

  public function listContacts(){
      
      $data = [
          'arrayContacts' => $this->contactModel->findAll()
      ];

      echo view('admin/templates/header');
      echo view('admin/templates/offcanva');
      echo view('admin/contacts/listContacts',$data);
      echo view('admin/templates/footer');
  }

  public function registerContacts(){
        echo view('admin/templates/header');
        echo view('admin/templates/offcanva');
        echo view('admin/contacts/registerContacts');
        echo view('admin/templates/footer');

      $this->contactModel->save($this->request->getPost());
  }
    
  public function consultContacts($idContact){
      if($this->contactModel->find([$idContact])){
        $data = [
          'arrayContact' => $this->contactModel->find([$idContact])
        ];

        echo view('admin/templates/header');
        echo view('admin/templates/offcanva');
        echo view('admin/products/updateContact',$data);
        echo view('admin/templates/footer');

        $this->updateContact($idContact);

      }else{
        echo ("Id de usuário não encontrado");
      }
  }

  public function updateContact($idContact){ 

      $data = [
        'name' => $this->request->getPost('name'),
        'email'=> $this->request->getPost('email'),
        'message'=> $this->request->getPost('message'),
        'status'=> $this->request->getPost('status'),
        'description'=> $this->request->getPost('description')
      ];
      
      $this->contactModel->update($idContact,$data);

      return redirect()->to(base_url('admin/listContacts'));  
  }

  public function deleteContact($idContact){
    $this->contactModel->delete($idContact);
    return redirect()->to(base_url('admin/listProducts'));  
  }
    
}