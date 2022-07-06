<?php

namespace App\Http\Controllers;

use App\Models\articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = articulo::where('estado_id', 1)->paginate(10);

        return view('articulo.index', compact('articulos'));
    }
}
