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

    function getContactsFor($search) {
        return $this -> asArray() -> like('idContact', $search)
        -> orLike('name', $search)
        -> orLike('email', $search)
        -> orLike('message', $search)
        -> orLike('status', $search)
        -> orLike('description', $search)
        -> findAll();
    } 
}