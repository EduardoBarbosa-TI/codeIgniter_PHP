<?php

namespace App\Controllers\Admin;

use App\Models\ContactModel;

use App\Controllers\BaseController;

class Contact extends BaseController{

  private $contactModel;
  private $session;

  public function __construct(){
    $this->session = \Config\Services::session();

    if($this->session->has('user') == null){
      return redirect()->to(base_url('admin/login'));
    }

    $this->contactModel = new ContactModel();

  }

  public function listContacts(){
      
      $data = [
          'contacts' => $this->contactModel->findAll()
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
          'contacts' => $this->contactModel->find([$idContact])
        ];

        echo view('admin/templates/header');
        echo view('admin/templates/offcanva');
        echo view('admin/contacts/updateContact',$data);
        echo view('admin/templates/footer');

        $this->updateContact($idContact);

      }else{
        echo ("Id do contato não encontrado");
      }
  }

  public function updateContact($idContact){ 

      $data = [
        'name' => $this->request->getPost('name'),
        'email'=> $this->request->getPost('email'),
        'description'=> $this->request->getPost('description')
      ];
      
      $this->contactModel->update($idContact,$data);

      return redirect()->to(base_url('admin/contact/list'));  
  }

  public function deleteContact($idContact){
    $this->contactModel->delete($idContact);
    return redirect()->to(base_url('admin/contact/list'));  
  }
    
}