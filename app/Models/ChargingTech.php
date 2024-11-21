<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChargingTech extends Model
{
    use HasFactory;
    protected $table = 'charging_teches';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'specific_id',
    ];
}
