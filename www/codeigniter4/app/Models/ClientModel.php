<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model{
    protected $primaryKey = 'idClient';
    protected $table = 'clients';
    protected $allowedFields = [
        'name',
        'phone',
        'email',
        'address'
    ];

    public function getClientsFor($search) {
        return $this -> asArray() -> like('idClient', $search)
        -> orLike('name', $search)
        -> orLike('phone', $search)
        -> orLike('email', $search)
        -> orLike('address', $search)
        -> findAll();
    }    
}