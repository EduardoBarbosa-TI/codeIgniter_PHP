<?php

namespace App\Controllers\Admin;

use App\Models\ClientModel;

use Config\Services;

use App\Controllers\BaseController;

class Client extends BaseController{

  private $clientModel;
  private $session;

  public function __construct(){ 
    $this->session = \Config\Services::session();

    if($this->session->get('user') == null){
      return redirect()->to(base_url('admin/login'));
    }

    $this->clientModel = new ClientModel();
  }

    public function listClients(){
      
      $data = [
          'arrayClients' => $this->clientModel->findAll()
      ];

      echo view('admin/templates/header');
      echo view('admin/templates/offcanva');
      echo view('admin/clients/listClients',$data);
      echo view('admin/templates/footer');
    }

    public function registerClients(){
      echo view('admin/templates/header');
      echo view('admin/templates/offcanva');
      echo view('admin/clients/registerClients');
      echo view('admin/templates/footer');


      if($this->request->getVar('submit') == ""){
        
        $this->clientModel->save($this->request->getPost());
        $this->session->set('message', true);
        
      }
      
    }
    
    public function consultClients($idClient){
      if($this->clientModel->find([$idClient])){
        $data = [
          'arrayClient' => $this->clientModel->find([$idClient])
        ];

        echo view('admin/templates/header');
        echo view('admin/templates/offcanva');
        echo view('admin/clients/updateClient',$data);
        echo view('admin/templates/footer');

        if($this->request->getVar('update') == true){
          $this->updateClient($idClient);
        }

      }else{
        return redirect()->to(base_url('admin/listClients'));
      }
    }

    public function updateClient($idClient){ 

      $data = [
        'name' => $this->request->getPost('name'),
        'email'=> $this->request->getPost('email'),
        'phone'=> $this->request->getPost('phone'),
        'email'=> $this->request->getPost('email')
      ];
      
      $this->clientModel->update($idClient,$data);


      return redirect()->to(base_url('admin/listClients'));  
    }

    public function deleteClient($idClient){

      $this->clientModel->delete($idClient);

      return redirect()->to(base_url('admin/listClients'));  
    }
    
}