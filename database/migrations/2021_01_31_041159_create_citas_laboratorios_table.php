<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas_laboratorios', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha_hora');
            $table->unsignedBigInteger('medico_id')->nullable();
            $table->unsignedBigInteger('paciente_id')->nullable();
            $table->unsignedBigInteger('laboratorista_id')->nullable();

            $table->foreign('medico_id')->references('id')->on('pacientes_medicos_laboratoristas')->onDelete('set null');
            $table->foreign('paciente_id')->references('id')->on('pacientes_medicos_laboratoristas')->onDelete('set null');
            $table->foreign('laboratorista_id')->references('id')->on('pacientes_medicos_laboratoristas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas_laboratorios');
    }
}
