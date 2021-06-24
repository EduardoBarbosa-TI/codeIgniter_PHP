<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Site extends Controller{

    public function index(){
        $this -> view();
    }

    public function view($page = 'home'){
        echo view('templates/header');
        echo view('pages/'.$page);
        echo view('templates/footer');
    }

}

?>