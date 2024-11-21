<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CameraRear extends Model
{
    use HasFactory;
    protected $table = 'camera_rears';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'camera_primary',
        'camera_wide_angle',
        'camera_tele',
        'specific_id',
    ];
}
