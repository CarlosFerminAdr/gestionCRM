<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ServicioController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('categorias', CategoriaController::class)->middleware('auth');
Route::resource('clientes', ClienteController::class)->middleware('auth');
Route::resource('productos', ProductoController::class);
Route::resource('servicios', ServicioController::class);

Auth::routes(['register'=>true, 'reset'=>false]);

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [ClienteController::class, 'index'])->name('home');
});
