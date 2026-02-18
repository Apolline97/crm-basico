@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Lista de Productos</h1>
        <a href="{{ route('productos.create') }}" class="btn btn-primary">Nuevo Producto</a>
    </div>

    {{-- ID para DataTables --}}
    <table id="tabla-productos" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Ficha (PDF)</th> <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->precio }} €</td>
                <td>{{ $producto->stock }}</td>
                <td>
                    @if($producto->pdf)
                        {{-- Botón para ver/descargar el PDF --}}
                        <a href="{{ asset('storage/' . $producto->pdf) }}" target="_blank" class="btn btn-outline-danger btn-sm">
                            📄 Ver PDF
                        </a>
                    @else
                        <span class="text-muted">No disponible</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    @if(Auth::user()->role == 'admin')
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Borrar producto?')">Borrar</button>
                        </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#tabla-productos').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
                }
            });
        });
    </script>
@endsection