<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Crear el Administrador
        User::create([
            'name' => 'Admin Jefe',
            'email' => 'admin@prueba.com',
            'password' => Hash::make('12345678'), // Contraseña
            'role' => 'admin', // <--- IMPORTANTE: Es admin
        ]);

        // 2. Crear el Usuario normal
        User::create([
            'name' => 'Empleado Normal',
            'email' => 'empleado@prueba.com',
            'password' => Hash::make('12345678'),
            'role' => 'usuario', // <--- Es usuario normal
        ]);
    }
}