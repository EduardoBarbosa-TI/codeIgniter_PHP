<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController{

   public $session;

    public function __construct()
    {
         $this->session = \Config\Services::session();
    }

    public function validateLogin(){
        $userName = $this -> request -> getVar('login');
        $userPassword = $this -> request -> getVar('password');
        
        $UserModel = new UserModel();

        if($user = $UserModel-> getUser($userName)){

            if($user['password'] == $userPassword){
               
                $this-> session -> set('user', $user);
                return redirect()->to(base_url('/admin'));
            }else{
                $this-> session->set('messageInvalidPassword', true);
                return redirect()->to(base_url('/admin'));
            }       
        }else{      
            $this-> session->set('messageInvalidNameAndPassword', true);
            return redirect()->to(base_url('/admin'));
        }
    }


}