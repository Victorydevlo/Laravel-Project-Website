<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WishList;

class WishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wishlist = [
            ['name' => 'The Jam', 'title' => 'Modern World','price' => 399, 'product_type_id' => 1, 'product_image' => 'A'],
            ['name' => 'Amy Winehouse', 'title' => 'Back to Black','price' => 299,'product_type_id' => 1, 'product_image' => 'A'],
        ];
        
        foreach($wishlist as $wishlists) {
            WishList::create([
                'name' => $wishlists['name'],
                'title' => $wishlists['title'],
                'price' => $wishlists['price'],
                'product_type_id' => $wishlists['product_type_id'],
                'product_image' => $wishlists['product_image']
            ]);
        }
    }
}
