<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bills extends Model
{
    use HasFactory;

    public $table='bills';
    protected $fillable = [

   
    'user_id',
    'p_id',
    'totalprice',
    'quantity',
    ];
}
