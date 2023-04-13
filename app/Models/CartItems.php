<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;

    public $table = 'cart_items';
    protected $fillable = [
        'id',
        'cart_id',
        'product_id',
        'price'
    ];
}
