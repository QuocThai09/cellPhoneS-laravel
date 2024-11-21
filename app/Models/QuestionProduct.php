<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionProduct extends Model
{
    use HasFactory;
    protected $table = 'question_products';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'question',
        'answer',
        'product_id',
    ];
}
