<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductCategoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'category_name',

    ];
}