<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->string('name', 25)->comment('Nombre');
            $table->string('email', 45)->unique();
            $table->timestamp('email_verified_at')->nullable()->comment('Correo electronico');
            $table->string('password')->comment('Contraseña');
            $table->string('primer_apellido',30)->comment('Primer apellido');
            $table->string('segundo_apellido',30)->nullable()->comment('Segundo Apellido');
           // $table->integer('edad');
            $table->date('fecha_nacimiento');
            $table->enum('sexo',['Femenino','Masculino','Indefinido'])->comment('Sexo');
            $table->enum('perfil',['Administrador','Empleado','Cliente'])->comment('Perfil');
            $table->enum('estatus',['Activo','Inactivo']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
