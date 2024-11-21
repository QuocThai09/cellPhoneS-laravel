<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarrantyService extends Model
{
    use HasFactory;
    protected $table = 'warranty_services';
    protected $primaryKey = 'warranty_service_id';
    protected $fillable = [
        'warranty_service_id',
        'warranty_service_name',
        'warranty_id',
    ];
}
