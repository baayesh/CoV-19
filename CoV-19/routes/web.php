<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
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

//route for store products
Route::post('update-data', [DataController::class,'store']) -> name('UpdateData');
Route::get('read', [DataController::class,'read']) -> name('read');
Route::get('old-data', [DataController::class, 'destroy']) -> name('delete');