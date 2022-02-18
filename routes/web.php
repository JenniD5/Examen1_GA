<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionesController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [FuncionesController::class,'index'])->name('funciones.index');
Route::delete('/{id}', [FuncionesController::class, 'destroy']) ->name ('funciones.destroy');

Route::get('/create', [FuncionesController::class, 'create'])->name('funciones.create');
Route::post('/store', [FuncionesController::class, 'store'])->name('funciones.store');