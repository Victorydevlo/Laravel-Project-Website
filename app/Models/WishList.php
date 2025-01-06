<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;

    protected $table = 'wish_list';

    protected $fillable = ['user_id', 'wishlist_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'wishlist_id');

    }
}
