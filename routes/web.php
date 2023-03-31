<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\RutasController;
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

// rutas Navegacion
// Route::get('/paises/index', [RutasController::class, 'index']) ->name('paises.index');
// Route::get('/departamentos/index', [RutasController::class, 'index']) ->name('departamentos.index');
// Route::get('/municipios/index', [RutasController::class, 'index']) ->name('municipios.index');


// rutas Paises
Route::get('/paises', [PaisController::class, 'index'])->name('paises.index');

