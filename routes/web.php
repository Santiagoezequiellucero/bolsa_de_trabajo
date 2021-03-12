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

Route::get('/', HomeController::class);

Route::get('jugadores', JugadorController::class);

Route::get('entrenadores', EntrenadorController::class);

Route::get('agencias', AgencyController::class);

Route::get('clubes', ClubController::class);
