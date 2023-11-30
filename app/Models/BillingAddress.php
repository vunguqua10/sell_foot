<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'username',
        'email',
        'address',
        'address2',
        'country',
        'state',
        'zip',
        'zip',
        'total_price',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
