<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MobilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    echo "selamat datang di laravel";
});
Route::get('/greeting', function (){
    return view('greeting');
});
Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/mobil/create', [MobilController::class, 'create']);
Route::post('/mobil/simpanData', [MobilController::class, 'store']);
Route::get('/merk', [MerkController::class, 'index']);
Route::get('/merk/edit/{id}', [MerkController::class, 'edit']);
Route::post('/merk/update/{id}', [MerkController::class, 'update']);
Route::get('/merk/delete/{id}', [MerkController::class, 'delete']);