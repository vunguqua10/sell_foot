<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishlistDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_wishlist',
        'id_user',
        'id_product',
    ];
}