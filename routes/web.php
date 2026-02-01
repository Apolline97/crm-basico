<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController; // <-- Importante: esto carga tu controlador

Route::get('/', function () {
    return view('welcome');
});

// Esto crea todas las rutas de tus Clientes de golpe
Route::resource('clientes', ClienteController::class);