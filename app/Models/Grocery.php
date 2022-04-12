<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grocery extends Model
{
    protected $fillable = [
        'name',
        'favorited',
        'quantity_ordered',

    ];

    public function orders()
    {
        return $this->belongsTo(Order::class,'id','id');
    }
}
