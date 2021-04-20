<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\EntrenadorController;
use App\Http\Controllers\AgencyController;
Use App\Http\Controllers\ClubController;


Route::get('/', HomeController::class)->name('inicio');

//jugadores
Route::get('jugadores/create', [JugadorController::class, 'create'])->name('jugadores.create');

Route::post('jugadores', [JugadorController::class, 'store'])->name('jugadores.store');

Route::get('jugadores/{jugador}/show', [JugadorController::class, 'show'])->name('jugadores.show');

Route::get('jugadores/{jugador}/edit',[JugadorController::class, 'edit'])->name('jugadores.edit');

Route::put('jugadores/{jugador}',[JugadorController::class, 'update'])->name('jugadores.update');

Route::delete('jugadores/{jugador}',[JugadorController::class, 'destroy'])->name('jugadores.destroy');


//entrenadores
Route::get('entrenadores', [EntrenadorController::class, 'index'])->name('entrenadores');

Route::post('entrenadores', [EntrenadorController::class, 'datosEntrenador'])->name('mostrarEntrenador');


//agencias
Route::get('agencias', [AgencyController::class, 'index'])->name('agencias');

Route::post('agencias', [AgencyController::class, 'datosAgencia'])->name('mostrarAgencia');


//clubes
Route::get('clubes', [ClubController::class, 'index'])->name('clubes');

Route::post('clubes', [ClubController::class, 'datosClub'])->name('mostrarClub');


