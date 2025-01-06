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
        ];
        
        foreach($wishlist as $wishlists) {
            WishList::create([
                'user_id' => $wishlists['user_id'],
                'wishlist_id' => $wishlists['wishlist_id'],
            ]);
        }
    }
}
