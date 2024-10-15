<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'product_id',
        'product_name',
        'price',
        'img',
        'discount',
        'hot',
        'new',
        'slug',
        'branch_id',
    ];
}
