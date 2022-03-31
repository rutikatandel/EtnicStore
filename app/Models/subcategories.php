<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategories extends Model
{
    use HasFactory;

    public $table='subcategories';
    protected $fillable = [

    'cat_id',
    'Sari',
    'Salwar_Kameez',
    'Churidaar',
    'Lehenga_Choli',
    'shirts',
    'frock',
    't-shirts',
    'jackets',
    ];
}
