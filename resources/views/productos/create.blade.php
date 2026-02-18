@extends('layout')

@section('content')
    <h1>Crear Producto</h1>

    {{-- Mostrar errores si fallan --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- OJO: enctype es obligatorio --}}
    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Precio</label>
                <input type="number" step="0.01" name="precio" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Stock</label>
                <input type="number" name="stock" class="form-control" required>
            </div>
        </div>
        
        {{-- CAMPO NUEVO: PDF --}}
        <div class="mb-3">
            <label>Ficha Técnica (PDF)</label>
            <input type="file" name="pdf" class="form-control" accept=".pdf">
        </div>

        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection