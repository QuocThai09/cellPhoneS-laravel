<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyWithProduct extends Model
{
    use HasFactory;
    protected $table = 'buy_with_products';
    protected $primaryKey = ['product_key','buy_with_id'];
    public $incrementing = false;
    protected $fillable = [
        'product_key',
        'buy_with_id',
        'buy_with_price',
    ];
}
