<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailImageProduct extends Model
{
    use HasFactory;
    protected $table = 'detail_image_products';
    protected $primaryKey = 'id';
    //public $incrementing = false;//primary key se khong tu dong tang
    protected $fillable = [
        'id',
        'detail_img',
        'product_id',
    ];
}
