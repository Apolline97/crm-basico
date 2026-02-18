<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // <--- IMPORTANTE: Necesario para manejar archivos

class ClienteController extends Controller
{
    // 1. Mostrar la lista de clientes
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    // 2. Mostrar el formulario para crear nuevo
    public function create()
    {
        return view('clientes.create');
    }

    // 3. Guardar el cliente nuevo en la BBDD (CON FOTO)
    public function store(Request $request)
    {
        // Validamos datos + imagen (opcional, max 2MB, tipos jpg,png,etc)
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        // Recogemos todos los datos excepto la imagen (la tratamos aparte)
        $datos = $request->except('imagen');

        // Si hay foto, la guardamos
        if ($request->hasFile('imagen')) {
            // Guarda en storage/app/public/clientes y devuelve la ruta
            $datos['imagen'] = $request->file('imagen')->store('clientes', 'public');
        }

        // Guardamos en BD con la ruta de la imagen incluida
        Cliente::create($datos);

        return redirect()->route('clientes.index')->with('success', 'Cliente creado con éxito');
    }

    // 4. Mostrar formulario de editar
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    // 5. Actualizar los datos (GESTIONANDO LA FOTO)
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $cliente = Cliente::find($id);
        $datos = $request->except('imagen');

        // Si suben una nueva imagen
        if ($request->hasFile('imagen')) {
            // 1. Borramos la imagen antigua si existe
            if ($cliente->imagen) {
                Storage::disk('public')->delete($cliente->imagen);
            }
            // 2. Guardamos la nueva
            $datos['imagen'] = $request->file('imagen')->store('clientes', 'public');
        }

        $cliente->update($datos);

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado');
    }

    // 6. Eliminar un cliente (Y SU FOTO)
    public function destroy($id)
    {
        $cliente = Cliente::find($id);

        // Si el cliente tiene foto, la borramos del disco duro
        if ($cliente->imagen) {
            Storage::disk('public')->delete($cliente->imagen);
        }

        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado');
    }
}