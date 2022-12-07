<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController{

   public $session;

    public function __construct()
    {
         $this->session = \Config\Services::session();
    }

    public function index(){
       

        if($this->session -> has('user')){
            echo view('admin/templates/header');
            echo view('admin/templates/offcanva');
            echo view('admin/templates/home');
            echo view('admin/templates/footer');
        }else{
            return redirect()->to(base_url('admin/login'));
        }
    
    }

    public function login(){
        echo view('admin/user/login');
    }

    public function logout(){
        $this->session->remove('user');
        return redirect()->to(base_url('admin/login'));
    }

}