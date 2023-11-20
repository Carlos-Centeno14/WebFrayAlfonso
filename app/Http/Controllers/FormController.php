<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class FormController extends Controller
{
    //
    public function form()
    {
        $productos = Producto::paginate(10);

        return view('producto.index', compact('productos'));
    }
}
