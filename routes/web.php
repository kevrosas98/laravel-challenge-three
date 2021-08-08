<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\GeneroController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/genero/{id}',[GeneroController::class,'listar']);
Route::get('/evento/{id}',[EventoController::class,'detalle']);
Route::get('/quienes-somos',[HomeController::class,'nosotros'])->name('nosotros');
