<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;
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
Route::get('/noticias', [HomeController::class, 'noticias']);
Route::get('/noticia/{id}', [HomeController::class, 'noticias_interna']);
Route::get('/cancela_associacao/{id}', [HomeController::class, 'cancela_associacao']);
Route::get('/confirma_associacao/{id}', [HomeController::class, 'confirma_associacao']);
Route::get('/momentos', [HomeController::class, 'momentos']);
Route::get('/momento/{id}', [HomeController::class, 'momento']);
Route::get('generate-pdf/{id}', [PDFController::class, 'generatePDF']);
Route::get('getFotos/{id}', [HomeController::class, 'getFotos']);