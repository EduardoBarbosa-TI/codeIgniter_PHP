<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model{
    protected $primaryKey = 'idClient';
    protected $table = 'clients';
    protected $allowedFields = [
        'name',
        'phone',
        'email',
        'address'
    ];
}