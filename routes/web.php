<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\EntrenadorController;
use App\Http\Controllers\AgencyController;
Use App\Http\Controllers\ClubController;
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

Route::get('/', HomeController::class)->name('inicio');

Route::get('jugadores', [JugadorController::class, 'index'])->name('jugadores');

Route::post('jugadores',[JugadorController::class, 'datosJugador'])->name('datosJugador');

Route::get('mostrarJugador/{id}',[JugadorController::class, 'show'])->name('mostrarJugador');

Route::get('editarJugador/{id}',[JugadorController::class, 'editar'])->name('editarJugador');

Route::get('entrenadores', [EntrenadorController::class, 'index'])->name('entrenadores');

Route::post('entrenadores', [EntrenadorController::class, 'datosEntrenador'])->name('mostrarEntrenador');

Route::get('agencias', [AgencyController::class, 'index'])->name('agencias');

Route::post('agencias', [AgencyController::class, 'datosAgencia'])->name('mostrarAgencia');

Route::get('clubes', [ClubController::class, 'index'])->name('clubes');

Route::post('clubes', [ClubController::class, 'datosClub'])->name('mostrarClub');

