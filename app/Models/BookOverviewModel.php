<?php

namespace App\Models;

use CodeIgniter\Model;

class BookOverviewModel extends Model
{
    protected $table = 'book_overview';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'booking_id'
    ];
}