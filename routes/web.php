<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::middleware(['auth'])->group(function () {
    

});

Route::get('/', [HomeController::class, 'index']);
Route::get('/parceiros', [HomeController::class, 'parceiros']);
Route::get('/associar', [HomeController::class, 'associar']);
Route::post('/associar', [HomeController::class, 'save']);
Route::post('/fale_conosco', [HomeController::class, 'fale_conosco']);
Route::get('/sobre', [HomeController::class, 'sobre']);