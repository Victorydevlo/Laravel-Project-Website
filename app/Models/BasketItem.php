<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketItem extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['basket_id', 'product_id', 'quantity', 'price'];

    public function basket()
    {
        return $this->belongsTo(Basket::class);
    }
}
