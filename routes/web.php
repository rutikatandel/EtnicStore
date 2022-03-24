<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\productscontroller;
use App\Http\Controllers\contactcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/index',[indexcontroller::class,'index']);
Route::get('/products',[productscontroller::class,'index']);
Route::get('/contact',[contactcontroller::class,'index']);



