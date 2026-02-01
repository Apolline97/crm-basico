<?php

namespace App\Http\Controllers;

use App\Models\Cliente; // Importamos el modelo Cliente
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // 1. Mostrar la lista de clientes
    public function index()
    {
        $clientes = Cliente::all(); // Coge todos los clientes de la BBDD
        return view('clientes.index', compact('clientes')); // Se los pasa a la vista
    }

    // 2. Mostrar el formulario para crear nuevo
    public function create()
    {
        return view('clientes.create');
    }

    // 3. Guardar el cliente nuevo en la BBDD
    public function store(Request $request)
    {
        // Validamos que los datos sean correctos
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
        ]);

        // Guardamos en la base de datos
        Cliente::create($request->all());

        // Redirigimos a la lista con un mensaje
        return redirect()->route('clientes.index');
    }

    // 4. Mostrar formulario de editar
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    // 5. Actualizar los datos de un cliente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
        ]);

        $cliente = Cliente::find($id);
        $cliente->update($request->all());

        return redirect()->route('clientes.index');
    }

    // 6. Eliminar un cliente
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}