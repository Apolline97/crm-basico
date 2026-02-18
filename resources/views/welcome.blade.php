@extends('layout')

@section('content')
<div class="text-center mt-5">
    <h1>Bienvenido a Mi CRM</h1>
    <p class="lead">Sistema de gestión para la Segunda Entrega.</p>
    <hr>
    
    @guest
        {{-- Si no ha entrado, le mostramos el botón de Login --}}
        <p>Por favor, identifícate para acceder.</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Iniciar Sesión</a>
    @else
        {{-- Si ya está dentro, le mandamos al panel --}}
        <p>Hola, {{ Auth::user()->name }}.</p>
        <a href="{{ route('clientes.index') }}" class="btn btn-success btn-lg">Ir a Clientes</a>
    @endguest
</div>
@endsection