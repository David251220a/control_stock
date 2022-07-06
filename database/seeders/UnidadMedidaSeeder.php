<?php

namespace Database\Seeders;

use App\Models\UnidadMedida;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnidadMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $unidad = UnidadMedida::create([
            'descripcion' => 'METROS',
            'estado_id' => 1,
            'usuario_grabacion' => 1,
            'usuario_modificacion' => 1,
        ]);

        $unidad = UnidadMedida::create([
            'descripcion' => 'CENTIMETROS',
            'estado_id' => 1,
            'usuario_grabacion' => 1,
            'usuario_modificacion' => 1,
        ]);

        $unidad = UnidadMedida::create([
            'descripcion' => 'LITROS',
            'estado_id' => 1,
            'usuario_grabacion' => 1,
            'usuario_modificacion' => 1,
        ]);

        $unidad = UnidadMedida::create([
            'descripcion' => 'KILOGRAMO',
            'estado_id' => 1,
            'usuario_grabacion' => 1,
            'usuario_modificacion' => 1,
        ]);

    }
}
