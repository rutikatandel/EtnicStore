<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    use HasFactory;

    public $table='carts';
    protected $fillable = [

    'pro_id',
    'user_id',
    'totalprice',
    'quantity',
    ];
}
