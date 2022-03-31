<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\productscontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\accountcontroller;
use App\Http\Controllers\singlecontroller;
use App\Http\Controllers\cartcontroller;

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


Route::get('/', function () {
    return view('admin.index');
});

Route::get('/index',[indexcontroller::class,'index']);
Route::get('/products',[productscontroller::class,'index']);
Route::get('/contact',[contactcontroller::class,'index']);
Route::get('/register',[registercontroller::class,'index']);
Route::get('/account',[accountcontroller::class,'index']);
Route::get('/single',[singlecontroller::class,'index']);
Route::get('/cart',[cartcontroller::class,'index']);


Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/register', function () {
//     return view('auth.register');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


