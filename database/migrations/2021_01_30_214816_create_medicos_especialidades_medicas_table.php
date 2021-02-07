<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosEspecialidadesMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos_especialidades_medicas', function (Blueprint $table) {
            $table->unsignedBigInteger('medico_id')->nullable();
            $table->unsignedBigInteger('especialidades_medicas_id')->nullable();

            $table->foreign('medico_id')->references('id')->on('pacientes_medicos_laboratoristas')->onDelete('set null');
            $table->foreign('especialidades_medicas_id')->references('id')->on('especialidades_medicas')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicos_especialidades_medicas');
    }
}
