<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Sample Product',
            'description' => 'This is a sample product.',
            'price' => 99.99,
            'stock' => 10,
            'image' => 'https://via.placeholder.com/150',
        ]);
    }
}
