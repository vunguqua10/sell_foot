<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'firt_name',
        'last_name',
        'user_name',
        'email_address',
        'address',
        'address_2',
        'country',
        'state',
        'zip',
    ];
}
