<?php

namespace App\Controllers;

use App\Models\ContactViewModel;

class ContactView extends BaseController{

    public function registerContacts(){
          $contactModel = new ContactViewModel();

          $contactModel->save($this->request->getPost());   
          
          return redirect()->to(base_url('home')); 
    }

} 