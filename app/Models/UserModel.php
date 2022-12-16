<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    /**---------------------- MODEL FOR USER REGISTRATION AND LOGIN ------------------------*/

    protected $table      = 'register';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'firstname',
        'lastname',
        'age',
        'address',
        'contact',
        'username',
        'email',
        'password'
    ];
}