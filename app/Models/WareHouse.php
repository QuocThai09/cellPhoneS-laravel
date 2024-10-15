<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WareHouse extends Model
{
    use HasFactory;
    protected $table = 'ware_houses';
    protected $primaryKey = 'warehouse_store_id';
    protected $fillable = [
        'warehouse_store_id',
        'warehouse_product_id',
        'warehouse_product_quantity',
    ];
}
