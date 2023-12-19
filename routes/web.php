<?php

use App\Http\Controllers\alternatifController;
use App\Http\Controllers\AValueController;
use App\Http\Controllers\CpiController;
use App\Http\Controllers\criteriaController;
use App\Models\Alternatif;
use App\Models\Criteria;
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
    $alternatif = Alternatif::all()->count();
    $criteria = Criteria::all()->count();
    return view('dashboard', compact('alternatif', 'criteria'));
});

//alternatif
Route::get('/alternatifs', [alternatifController::class, 'index']);
Route::post('/add_alternatif', [alternatifController::class, 'store']);
Route::get('/alternatif/form_add', [alternatifController::class, 'create']);
Route::get('/alternatif/{id}', [alternatifController::class, 'edit']);
Route::put('/edit_alternatif/{id}', [alternatifController::class, 'update']);

//criteria
Route::get('/criterias', [criteriaController::class, 'index']);
Route::post('/add_criteria', [CriteriaController::class, 'store']);
Route::get('/criteria/form_add', [criteriaController::class, 'create']);
Route::get('/criteria/{id}', [criteriaController::class, 'edit']);
Route::put('/edit_criteria/{id}', [criteriaController::class, 'update']);

//nilai
Route::get('/avalue', [AValueController::class, 'index']);
Route::get('/value/{id}', [AValueController::class, 'showValue']);
Route::put('/edit_value/{id}', [AValueController::class, 'edit']);

//perhitungan
Route::get('/calculate', [CpiController::class, 'index']);
