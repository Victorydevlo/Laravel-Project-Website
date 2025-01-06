<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketItem extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'basket_items';

    protected $fillable = ['basket_id', 'quantity', 'price', 'product_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function product()
{
    return $this->belongsTo(Product::class);
}
}
