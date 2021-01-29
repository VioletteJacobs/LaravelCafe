<?php

use App\Http\Controllers\ProfilController;
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
Route::get('/about', [ProfilController::class,'about'])-> name("about");
Route::get('/store', [ProfilController::class,'store'])-> name("store");
Route::get('/product', [ProfilController::class,'product'])-> name("product");

