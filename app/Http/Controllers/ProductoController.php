<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Necesario para manejar archivos

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        // 1. Validamos (PDF opcional, max 10MB)
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'pdf'    => 'nullable|mimes:pdf|max:10000', 
        ]);

        $datos = $request->except('pdf');

        // 2. Si suben PDF, lo guardamos en la carpeta 'manuales'
        if ($request->hasFile('pdf')) {
            $datos['pdf'] = $request->file('pdf')->store('manuales', 'public');
        }

        Producto::create($datos);

        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente');
    }

    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'pdf'    => 'nullable|mimes:pdf|max:10000',
        ]);

        $producto = Producto::find($id);
        $datos = $request->except('pdf');

        // 3. Gestión del archivo al editar
        if ($request->hasFile('pdf')) {
            // Si ya tenía un PDF antes, lo borramos para no ocupar espacio
            if ($producto->pdf) {
                Storage::disk('public')->delete($producto->pdf);
            }
            // Guardamos el nuevo
            $datos['pdf'] = $request->file('pdf')->store('manuales', 'public');
        }

        $producto->update($datos);

        return redirect()->route('productos.index')->with('success', 'Producto actualizado');
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);

        // 4. Al borrar producto, borramos su PDF
        if ($producto->pdf) {
            Storage::disk('public')->delete($producto->pdf);
        }

        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado');
    }
}