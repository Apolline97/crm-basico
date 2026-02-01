@extends('layout')

@section('content')
    <h1>Crear Producto</h1>
    <form action="{{ route('productos.store') }}" method="POST">
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
        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection