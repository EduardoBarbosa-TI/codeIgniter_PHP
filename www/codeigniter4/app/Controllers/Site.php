<?php

namespace App\Controllers;

class Site extends BaseController{

    public function index(){
        $this -> view();
    }
    
    public function view($page = null){
        if($page == null){
            $page = 'home';
        }
        echo view('templates/header');
        echo view('site/'.$page);
        echo view('templates/footer');
    }

}