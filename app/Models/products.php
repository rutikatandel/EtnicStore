<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    public $table='products';
    protected $fillable = [

    'user_id',
    'product_img',
    'product_name',
    'size',
    'price',
    'rating',
    'description',
    'colors',
    'occasion',
    ];
}
