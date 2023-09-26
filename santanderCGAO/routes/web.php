<?php

use App\Http\Controllers\CiudadController;
use App\Http\Controllers\MujerCuidadoraController;

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

//Ruta para acceder a la pagina ciudad
Route::get('ciudad',[CiudadController::class,"index"])->name('ciudad.index');
Route::post('/ingresarCiudad',[CiudadController::class,"create"])->name('ciudad.create');



//Ruta para acceder a la pagina mujerCuidadora
Route::get('mujer',[MujerCuidadoraController::class,"index"])->name('mujer.index');

Route::post('ingresarMujer',[MujerCuidadoraController::class,'create'])->name('mujer.create');