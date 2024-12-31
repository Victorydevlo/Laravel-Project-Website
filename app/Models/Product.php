<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'price', 'product_type_id', 'product_image'];

    public function productType()
{
    return $this->hasOne('App\Models\ProductType','id','product_type_id', 'product_image');
}

public function isInWishlist()
{
    return auth()->check() && auth()->user()->wishlist()->where('product_id', $this->id)->exists();
}
}

