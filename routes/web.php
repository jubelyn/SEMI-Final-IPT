<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|xa
*/

Route::get('/',[App\Http\Controllers\StoreController::class,'index']);
Route::get('store-list-show',[App\Http\Controllers\StoreController::class,'show']);
Route::get('create-store',[App\Http\Controllers\StoreController::class,'create']);
Route::post('store-store',[App\Http\Controllers\StoreController::class,'store']);


