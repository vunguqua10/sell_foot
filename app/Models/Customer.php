<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $fillable = [
        'customer_name', 'email', 'password','phone','address','status','token'
    ];

    public function order_list(){
        return $this->hasMany(Order::class,'customer_id','id');
    }

    public function comment_customer(){
        return $this->belongsTo(Comment::class,'id','customer_id');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
