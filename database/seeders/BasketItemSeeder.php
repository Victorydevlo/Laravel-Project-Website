<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BasketItem;

class BasketItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $basketItems = [];

        foreach($basketItems as $basketitem) {
            BasketItem::create([
                'basket_id' => $basketitem['basket_id'],
                'product_id' => $basketitem['product_id'],
                'quantity' => $basketitem['quantity'],
                'price' => $basketitem['price'],
            ]);
        }
    }
}
