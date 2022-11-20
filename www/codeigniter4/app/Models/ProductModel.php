<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model{
    protected $DBGroup = 'default';
    protected $table = 'products';
    protected $primaryKey = 'idProduct';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'name',
        'price',
        'idCategory',
        'description'
    ];
    
    protected $useTimetamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

}