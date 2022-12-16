<?php

namespace App\Models;

use CodeIgniter\Model;

class DesignModel extends Model
{
    protected $table = 'design';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'design_name',
        'description',
        'price',
        'image',    
        'status'
    ];
}