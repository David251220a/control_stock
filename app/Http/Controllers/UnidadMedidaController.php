<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnidadMedidaController extends Controller
{
    public function index()
    {
        return view('unidad_medida.index');
    }
}
