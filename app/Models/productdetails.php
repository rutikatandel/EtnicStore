<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productdetails extends Model
{
    use HasFactory;

    public $table='productdetails';
    protected $fillable = [

    'cat_id',
    'subcat_id',
    'pro_id',
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
