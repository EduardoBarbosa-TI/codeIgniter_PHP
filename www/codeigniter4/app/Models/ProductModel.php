<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model{
    
    protected $table = 'products';
    protected $primaryKey = 'idProduct';
    protected $allowedFields = [
        'name',
        'price',
        'idCategory',
        'description'
    ];  
    
    function getProductsFor($search) {
        return $this -> asArray() -> like('idProduct', $search)
        -> orLike('name', $search)
        -> orLike('price', $search)
        -> orLike('idCategory', $search)
        -> orLike('description', $search)
        -> findAll();
    }

}