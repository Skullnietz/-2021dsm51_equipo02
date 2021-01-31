<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesMedicosLaboratoristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes_medicos_laboratoristas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('primer_apellido',30);
            $table->string('segundo_apellido',30)->nullable();
            $table->date('fecha_nacimiento');
            $table->enum('sexo',['Femenino','Masculino','Indefinido']);
            $table->enum('sexo',['medico','paciente','laboratorista']);
            $table->string('correo_electronico',45);
            $table->string('contraseña',12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes_medicos_laboratoristas');
    }
}
