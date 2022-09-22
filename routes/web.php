<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [MainController::class,'index']);
Route::post('/pushData', [MainController::class,'store']);
Route::get('/login', [LoginController::class,'index']);
Route::post('/daftar', [LoginController::class,'register']);
Route::post('/signin', [LoginController::class,'login']);
Route::get('/logout', [LoginController::class,'logout']);
Route::post('/order', [OrderController::class,'order']);
Route::get('/cart', [OrderController::class,'cart']);
Route::get('/checkout', [OrderController::class,'checkout']);
Route::get('/checkout_list', [OrderController::class,'checkout_list']);



