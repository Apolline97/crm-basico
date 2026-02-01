@extends('layout')
@section('content')
    <h1>Crear Proveedor</h1>
    <form action="{{ route('proveedores.store') }}" method="POST">
        @csrf
        <div class="mb-3"><label>Nombre Contacto</label><input type="text" name="nombre" class="form-control" required></div>
        <div class="mb-3"><label>Empresa</label><input type="text" name="empresa" class="form-control"></div>
        <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" required></div>
        <div class="mb-3"><label>Teléfono</label><input type="text" name="telefono" class="form-control"></div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection