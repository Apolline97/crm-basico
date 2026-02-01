<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController; 
use App\Http\Controllers\CategoriaController;  
use App\Http\Controllers\EmpleadoController;

Route::get('/', function () {
    return view('welcome');
});

// Esto crea todas las rutas de tus Clientes de golpe
Route::resource('clientes', ClienteController::class);
Route::resource('productos', ProductoController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('empleados', EmpleadoController::class);