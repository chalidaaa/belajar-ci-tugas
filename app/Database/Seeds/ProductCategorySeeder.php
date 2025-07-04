<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
public function run()
{
    $categories = [
        ['name' => 'Laptop', 'description' => 'Laptop Gaming dan Non-Gaming'],
        ['name' => 'Printer', 'description' => 'Printer Epson, HP, Canon, dll'],
    ];

    $products = $this->db->table('produks')->select('id')->get()->getResult();

    foreach ($products as $product) {
        $randomIndex = array_rand($categories);
        $this->db->table('product_category')->insert([
            'name' => $categories[$randomIndex]['name'],
            'description' => $categories[$randomIndex]['description'],
            'id' => $product->id, // <-- jika foreign key
        ]);
    }
}
}