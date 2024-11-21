<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacteristicProduct extends Model
{
    use HasFactory;
    protected $table = 'characteristic_products';
    protected $primaryKey = 'characteristic_id';
    protected $fillable = [
        'characteristic_id',
        'characteristic_name',
        'product_id',
    ];
}
