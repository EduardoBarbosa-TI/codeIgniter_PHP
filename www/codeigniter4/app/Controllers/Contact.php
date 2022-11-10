<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController{
    public function listContacts(){
        $ContactModel = new ContactModel();
        $data = [
              'arrayContacts' => $ContactModel->findAll()
        ];
        
        echo view('templates/header');
        echo view('contact/listContacts', $data);
        echo view('templates/footer');
      }

}