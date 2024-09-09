<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Product A',
            'price' => 99.99,
        ]);

        Product::create([
            'name' => 'Product B',
            'price' => 149.99,
        ]);

        Product::create([
            'name' => 'Product C',
            'price' => 199.99,
        ]);
    }
}
