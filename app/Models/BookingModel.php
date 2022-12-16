<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'fullname',
        'contact',
        'email',
        'category',
        'package',
        'location',
        'date',
        'start',
        'end',
        'mop',
        'status'
    ];
}