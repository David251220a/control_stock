<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\UnidadMedida;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = Articulo::where('estado_id', 1)->paginate(10);

        return view('articulo.index', compact('articulos'));
    }

    public function create()
    {
        $categoria = Categoria::where('estado_id', 1)->get();
        $unidad = UnidadMedida::where('estado_id', 1)->get();
        return view('articulo.create', compact('categoria', 'unidad'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'descripcion' => 'required',
            'categoria_id' => 'required',
            'unidad_medida_id' => 'required',
            'porc_iva' => 'required',
        ]);

        $data['estado_id'] = 1;
        $data['usuario_grabacion'] = auth()->user()->id;
        $data['usuario_modificacion'] = auth()->user()->id;

        Articulo::create($data);

        return redirect()->route('articulo.index')->with('message', 'Se ha creado con exito el articulo!.');

    }
}
