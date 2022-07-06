<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('categoria_id');
            $table->integer('unidad_medida_id');
            $table->string('descripcion', 150);
            $table->string('observacion', 200)->nullable();
            $table->decimal('porc_iva', 12, 0);
            $table->integer('estado_id');
            $table->foreignId('usuario_grabacion')->references('id')->on('users');
            $table->foreignId('usuario_modificacion')->references('id')->on('users');
            $table->timestamps();

            $table->foreign('estado_id')->references('id')->on('estado');
            $table->foreign('categoria_id')->references('id')->on('categoria');
            $table->foreign('unidad_medida_id')->references('id')->on('unidad_medida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo');
    }
};
