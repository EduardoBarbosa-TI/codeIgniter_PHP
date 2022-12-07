<?php

namespace App\Controllers\Api;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;
use App\Models\ClientModel;

class Clients extends Controller{
    protected $clientModel;

    use ResponseTrait;

    public function __construct()
    {
        $this->clientModel = new ClientModel();
    }

    public function listClients()
    {
        $data = $this->clientModel->findAll();
        
        return $this->setResponseFormat('json')->respond($data);
    }
}