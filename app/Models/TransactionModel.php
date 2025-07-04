<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 'total', 'ongkir', 'alamat', 'status', 'created_at', 'updated_at'
    ];
}