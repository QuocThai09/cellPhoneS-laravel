<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;
    protected $table = 'stores';
    protected $primaryKey = 'store_id';
    protected $fillable = [
        'store_id',
        'district_id',
        'address',
        'hot_line',
    ];
}
