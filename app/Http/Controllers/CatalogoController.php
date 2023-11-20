<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function catalog()
    {
        $productos = Producto::all();

        return view('catalog', compact('productos'));
    }
}
