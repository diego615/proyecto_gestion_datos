<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\CombustibleController;
use App\Http\Controllers\ProveedoreController;
use App\Http\Controllers\NavieraController;
use App\Http\Controllers\AbastecimientoController;
use App\Http\Controllers\EnvioController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('fabricantes', FabricanteController::class);
Route::resource('combustibles', CombustibleController::class);
Route::resource('proveedores', ProveedoreController::class);
Route::resource('navieras', NavieraController::class);
Route::resource('abastecimientos', AbastecimientoController::class);
Route::resource('envios', EnvioController::class);