@extends('layout')

@section('content')
    <h1>Editar Cliente</h1>

    {{-- Mostrar errores si los hay --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulario de Edición --}}
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') {{-- Importante: Laravel usa PUT para actualizar --}}

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $cliente->nombre }}" required>
        </div>
        
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $cliente->email }}" required>
        </div>
        
        <div class="mb-3">
            <label>Teléfono</label>
            <input type="text" name="telefono" class="form-control" value="{{ $cliente->telefono }}">
        </div>

        {{-- CAMPO DE FOTO --}}
        <div class="mb-3">
            <label>Foto de Perfil (Opcional)</label>
            <input type="file" name="imagen" class="form-control" accept="image/*">
            
            @if($cliente->imagen)
                <div class="mt-2">
                    <p>Foto actual:</p>
                    <img src="{{ asset('storage/' . $cliente->imagen) }}" alt="Foto actual" width="100" class="img-thumbnail">
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label>Dirección</label>
            <textarea name="direccion" class="form-control">{{ $cliente->direccion }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection