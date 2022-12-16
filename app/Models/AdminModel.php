<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    /**---------------------- MODEL FOR ADMIN LOGIN ------------------------*/
    
    protected $table      = 'admin';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 
        'password'
    ];
}