<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specifications extends Model
{
    use HasFactory;
    protected $table = 'specifications';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'screen_size',
        'screen_features',
        'screen_tech',
        'screen_resolution',
        'district_id',
        'chipset',
        'gpu',
        'nfc',
        'sim',
        'internet',
        'ram',
        'memory',
        'weight',
        'cpu',
        'wifi',
        'bluetooth',
        'product_id',
    ];
    
}
