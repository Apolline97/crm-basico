@extends('layout')
@section('content')
    <h1>Editar Empleado</h1>
    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3"><label>Nombre</label><input type="text" name="nombre" value="{{ $empleado->nombre }}" class="form-control" required></div>
        <div class="mb-3"><label>Puesto</label><input type="text" name="puesto" value="{{ $empleado->puesto }}" class="form-control" required></div>
        <div class="mb-3"><label>Email</label><input type="email" name="email" value="{{ $empleado->email }}" class="form-control" required></div>
        <div class="mb-3"><label>Teléfono</label><input type="text" name="telefono" value="{{ $empleado->telefono }}" class="form-control"></div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
@endsection