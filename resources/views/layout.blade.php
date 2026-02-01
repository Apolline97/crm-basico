<!DOCTYPE html>
<html>
<head>
    <title>CRM Básico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Mi CRM</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a>
                <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
                <a class="nav-link" href="{{ route('proveedores.index') }}">Proveedores</a>
                <a class="nav-link" href="{{ route('categorias.index') }}">Categorías</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>