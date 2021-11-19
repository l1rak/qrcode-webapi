<?php

use App\Http\Controllers\QrDataController;
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

/* web api endpoints*/
Route::get('/', [QrDataController::class, 'index']);
Route::post('/', [QrDataController::class, 'store'])->name('store');
Route::get('qrcode/{id}', [QrDataController::class, 'generate'])->name('generate');
