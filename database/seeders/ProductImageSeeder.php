<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productimage = [
            'A',
            'B',
            'C',
        ];

        foreach($productimage as $productimages) {
            ProductImage::create([
                'code' => $productimages,
            ]);
        }
    }
}
