@extends('layout')
@section('content')
    <h1>Registrar Empleado</h1>
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="mb-3"><label>Nombre</label><input type="text" name="nombre" class="form-control" required></div>
        <div class="mb-3"><label>Puesto</label><input type="text" name="puesto" class="form-control" required placeholder="Ej: Vendedor"></div>
        <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" required></div>
        <div class="mb-3"><label>Teléfono</label><input type="text" name="telefono" class="form-control"></div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection