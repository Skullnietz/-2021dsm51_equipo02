<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasLaboratorioEstudiosMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas_laboratorio_estudios_medicos', function (Blueprint $table) {
            $table->unsignedBigInterger('citas_laboratorio_id')->nullable();
            $table->unsignedBigInterger('estudios_medicos_id')->nullable();

            $table->foreign('citas_laboratorio_id')->references('id')->on('estudios_medicos')->onDelete('set null');
            $table->foreign('estudios_medicos_id')->references('id')->on('citas_laboratorio')->onDelete('set null');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas_laboratorio_estudios_medicos');
    }
}
