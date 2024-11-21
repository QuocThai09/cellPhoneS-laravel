<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    use HasFactory;
    protected $table = 'warranties';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'warranty_name',
        'warranty_price',
        'warranty_apply',
        'warranty_time',
        'warranty_terms',
        'warranty_note',
        'warranty_processing',
        'product_id',
    ];
}
