<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class EditController extends Controller
{
    //
    public function edit($id)
    {
        $producto = Producto::find($id);
        if (!$producto) {
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado');
        }
        return view('producto.edit', compact('producto'));
    }
}
