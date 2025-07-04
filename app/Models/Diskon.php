<?php

namespace App\Models;

use CodeIgniter\Model;

class Diskon extends Model
{
    protected $table            = 'diskon';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
		'nominal','tanggal','created_at','updated_at'
	];  
}
