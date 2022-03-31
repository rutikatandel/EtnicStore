<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class navbar extends Model
{
    use HasFactory;

    public $table='navbar';
    protected $fillable = [

    'navbars_img',
    ];
}
