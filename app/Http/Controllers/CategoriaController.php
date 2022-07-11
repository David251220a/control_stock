<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){


        $categorias = Categoria::where('estado_id', 1)->paginate(10);

        return view('categoria.index', compact('categorias'));
    }

    public function create(){
        return view('categoria.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'descripcion' => 'required',

        ]);

        $data['estado_id'] = 1;
        $data['usuario_grabacion'] = auth()->user()->id;
        $data['usuario_modificacion'] = auth()->user()->id;

        Categoria::create($data);

        return redirect()->route('categoria.index')->with('message', 'Se ha creado con exito la Categoria!.');

    }

    public function edit(Categoria $categoria)
    {
        return view('categoria.edit', compact('id'));
    }
    //
}
