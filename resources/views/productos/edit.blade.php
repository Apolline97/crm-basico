@extends('layout')

@section('content')
    <h1>Editar Producto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ $producto->nombre }}" class="form-control" required>
        </div>
        
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Precio</label>
                <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Stock</label>
                <input type="number" name="stock" value="{{ $producto->stock }}" class="form-control" required>
            </div>
        </div>

        {{-- CAMPO PDF --}}
        <div class="mb-3">
            <label>Ficha Técnica (PDF)</label>
            <input type="file" name="pdf" class="form-control" accept=".pdf">
            @if($producto->pdf)
                <small class="text-success">Actualmente existe un archivo cargado.</small>
            @endif
        </div>

        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control">{{ $producto->descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection