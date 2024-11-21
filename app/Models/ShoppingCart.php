<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;
    protected $table = 'shopping_carts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'color_id',
        'product_id',
    ];
}
