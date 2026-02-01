<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;   

Route::get('/', function () {
    return view('welcome');
});

// Esto crea todas las rutas de tus Clientes de golpe
Route::resource('clientes', ClienteController::class);
Route::resource('productos', ProductoController::class);
Route::resource('proveedores', ProveedorController::class);