<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

// Esto crea todas las rutas de tus Clientes de golpe
Route::resource('clientes', ClienteController::class);
Route::resource('productos', ProductoController::class);