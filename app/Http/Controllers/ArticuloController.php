<?php

namespace App\Http\Controllers;

use App\Models\articulo;
use App\Models\Categoria;
use App\Models\UnidadMedida;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = articulo::where('estado_id', 1)->paginate(10);

        return view('articulo.index', compact('articulos'));
    }

    public function create()
    {
        $categoria = Categoria::where('estado_id', 1)->get();
        $unidad = UnidadMedida::where('estado_id', 1)->get();
        return view('articulo.create', compact('categoria', 'unidad'));
    }
}
