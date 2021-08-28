<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\MapaController;
use App\Http\Controllers\PasajeroController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\UnidadController;

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

Route::get('/', HomeController::class);

Route::get('conductores', [ConductorController::class, 'index'])->name('conductores');
Route::get('conductores/create', [ConductorController::class, 'create'])->name('conductores-create');
Route::post('conductores', [ConductorController::class, 'store'])->name('conductores-store');
Route::get('conductor/{conductor}', [ConductorController::class, 'show'])->name('conductores-show');
Route::get('conductor/{conductor}/edit', [ConductorController::class, 'edit'])->name('conductores-edit');
Route::put('conductor/{conductor}', [ConductorController::class, 'update'])->name('conductores-update');

Route::get('mapa', MapaController::class)->name('mapa');

Route::get('pasajeros', [PasajeroController::class, 'index'])->name('pasajeros');
Route::get('pasajeros/menu', [PasajeroController::class, 'menu'])->name('pasajeros-menu');
Route::get('pasajeros/create', [PasajeroController::class, 'create'])->name('pasajeros-create');
Route::post('pasajeros', [ConductorController::class, 'store'])->name('pasajeros-store');
Route::get('pasajeros/{pasajero}', [PasajeroController::class, 'show'])->name('pasajeros-show');
Route::get('pasajero/{pasajero}/edit', [PasajeroController::class, 'edit'])->name('pasajeros-edit');
Route::put('pasajero/{pasajero}', [PasajeroController::class, 'update'])->name('pasajeros-update');

Route::get('rutas', [RutaController::class, 'index'])->name('rutas');
Route::get('rutas/create', [RutaController::class, 'create'])->name('rutas-create');
Route::get('rutas/{ruta}', [RutaController::class, 'show'])->name('rutas-show');
Route::get('ruta/{ruta}/edit', [RutaController::class, 'edit'])->name('rutas-edit');
Route::put('ruta/{ruta}', [RutaController::class, 'update'])->name('rutas-update');

Route::get('socios', [SocioController::class, 'index'])->name('socios');
Route::get('socios/create', [SocioController::class, 'create'])->name('socios-create');
Route::get('socios/{socio}', [SocioController::class, 'show'])->name('socios-show');
Route::get('socio/{socio}/edit', [SocioController::class, 'edit'])->name('socios-edit');
Route::put('socio/{socio}', [SocioController::class, 'update'])->name('socios-update');

Route::get('unidades', [UnidadController::class, 'index'])->name('unidades');
Route::get('unidades/create', [UnidadController::class, 'create'])->name('unidades-create');
Route::get('unidades/{unidad}', [UnidadController::class, 'show'])->name('unidades-show');
Route::get('unidad/{unidad}/edit', [UnidadController::class, 'edit'])->name('unidads-edit');
Route::put('unidad/{unidad}', [UnidadController::class, 'update'])->name('unidads-update');

