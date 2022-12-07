<?php

namespace App\Controllers\Api;
use CodeIgniter\RESTful\ResourceController;
use App\Models\ClientModel;

class Clients extends ResourceController{
    protected $clientModel;

    public function __construct()
    {
        $this->clientModel = new ClientModel();
    }

    public function listClients()
    {
        $data = $this->clientModel->findAll();
        
        return $this->response->setJSON($data);
    }
}