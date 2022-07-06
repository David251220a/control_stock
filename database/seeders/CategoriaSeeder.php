<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = Categoria::create([
            'descripcion' => 'INFORMATICA',
            'estado_id' => 1,
            'usuario_grabacion' => 1,
            'usuario_modificacion' => 1,
        ]);

        $categoria = Categoria::create([
            'descripcion' => 'PANADERIA',
            'estado_id' => 1,
            'usuario_grabacion' => 1,
            'usuario_modificacion' => 1,
        ]);

        $categoria = Categoria::create([
            'descripcion' => 'CONFITERIA',
            'estado_id' => 1,
            'usuario_grabacion' => 1,
            'usuario_modificacion' => 1,
        ]);

        $categoria = Categoria::create([
            'descripcion' => 'FARMACIA',
            'estado_id' => 1,
            'usuario_grabacion' => 1,
            'usuario_modificacion' => 1,
        ]);

        $categoria = Categoria::create([
            'descripcion' => 'DEPORTE',
            'estado_id' => 1,
            'usuario_grabacion' => 1,
            'usuario_modificacion' => 1,
        ]);
    }
}
