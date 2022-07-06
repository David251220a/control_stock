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
    //
}
