<?php

namespace App\Models;

// ESTAS SON LAS LÍNEAS QUE FALTABAN:
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'telefono', 'direccion', 'imagen'];
}