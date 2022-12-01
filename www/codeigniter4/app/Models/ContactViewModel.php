<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactViewModel extends Model{
    protected $primaryKey = 'id';
    protected $table = 'contactsView';
    protected $allowedFields = [
        'name',
        'email',
        'phone' 
    ];
}