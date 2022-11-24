<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model{
    protected $primaryKey = 'idContact';
    protected $table = 'contacts';
    protected $allowedFields = [
        'name',
        'email',
        'message',
        'status',
        'description'
    ];
}