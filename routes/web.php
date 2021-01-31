<?php

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [ProfilController::class,'index'])-> name("home");
Route::get('/about', [AboutController::class,'about'])-> name("about");
Route::get('/store', [StoreController::class,'store'])-> name("store");
Route::get('/product', [ProductController::class,'product'])-> name("product");

