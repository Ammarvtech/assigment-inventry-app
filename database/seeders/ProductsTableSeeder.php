<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Product 1',
            'description' => 'Description of product 1',
            'price' => 10.99,
            'quantity' => 10,
        ]);

        Product::create([
            'name' => 'Product 2',
            'description' => 'Description of product 2',
            'price' => 20.99,
            'quantity' => 20,
        ]);

        Product::create([
            'name' => 'Product 3',
            'description' => 'Description of product 3',
            'price' => 30.99,
            'quantity' => 30,
        ]);
    }
}
