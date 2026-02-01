<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    // Si Laravel creó la tabla como 'proveedors', forzamos el nombre correcto:
    protected $table = 'proveedores'; 

    protected $fillable = ['nombre', 'empresa', 'email', 'telefono'];
}