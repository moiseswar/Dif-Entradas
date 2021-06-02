<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaDesayunosEscolares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desayunos', function (Blueprint $table) {
            $table->id()->increment('Id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('curp');
            $table->string('escuela');
            $table->string('clave');
            $table->date('fecha_nacimiento');
            $table->string('sexo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desayunos');
    }
}
