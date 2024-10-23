<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorProduct extends Model
{
    use HasFactory;
    protected $table = 'color_products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'img_color_product',
        'name_color',
        'product_id',
    ];
}
