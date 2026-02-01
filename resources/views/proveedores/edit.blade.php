@extends('layout')
@section('content')
    <h1>Editar Proveedor</h1>
    <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3"><label>Nombre Contacto</label><input type="text" name="nombre" value="{{ $proveedor->nombre }}" class="form-control" required></div>
        <div class="mb-3"><label>Empresa</label><input type="text" name="empresa" value="{{ $proveedor->empresa }}" class="form-control"></div>
        <div class="mb-3"><label>Email</label><input type="email" name="email" value="{{ $proveedor->email }}" class="form-control" required></div>
        <div class="mb-3"><label>Teléfono</label><input type="text" name="telefono" value="{{ $proveedor->telefono }}" class="form-control"></div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
@endsection