<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'grocery_id',
        'user_id',
        'quantity',
        'total_price'
    ];

    public function groceries()
    {
        return $this->hasMany(Grocery::class,'id','grocery_id');
    }
}
