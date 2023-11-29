<?php

use App\Http\Controllers\alternatifController;
use App\Http\Controllers\criteriaController;
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
    return view('dashboard');
});

//alternatif
Route::get('/alternatifs', [alternatifController::class, 'index']);

//criteria
Route::get('/criterias', [criteriaController::class, 'index']);
