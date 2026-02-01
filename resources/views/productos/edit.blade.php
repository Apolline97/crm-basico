@extends('layout')

@section('content')
    <h1>Editar Producto</h1>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
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
        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control">{{ $producto->descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
@endsection