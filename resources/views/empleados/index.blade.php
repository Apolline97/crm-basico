@extends('layout')
@section('content')
    <h1>Empleados</h1>
    <a href="{{ route('empleados.create') }}" class="btn btn-primary mb-3">Nuevo Empleado</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->puesto }}</td>
                <td>{{ $empleado->email }}</td>
                <td>
                    <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection