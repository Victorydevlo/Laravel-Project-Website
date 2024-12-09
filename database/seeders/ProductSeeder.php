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
        $products = [
            ['name' => 'The Jam', 'title' => 'Modern World','price' => 399, 'product_type_id' => 1, 'product_image' => 'A'],
            ['name' => 'Amy Winehouse', 'title' => 'Back to Black','price' => 299,'product_type_id' => 1, 'product_image' => 'A'],
        ];

        foreach($products as $product) {
            Product::create([
                'name' => $product['name'],
                'title' => $product['title'],
                'price' => $product['price'],
                'product_type_id' => $product['product_type_id'],
                'product_image' => $product['product_image']
            ]);
        }
    }
}
