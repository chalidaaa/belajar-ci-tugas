<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
	protected $table = 'produks'; 
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'name','harga','jumlah','foto','created_at','updated_at'
	];  
}