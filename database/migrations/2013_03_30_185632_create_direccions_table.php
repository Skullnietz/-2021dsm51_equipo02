<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('state_id')->unsigned()->comment('Estado');
            $table->foreign('state_id')->references('id')->on('states');
            $table->integer('town_id')->unsigned()->comment('Ciudad o Localidad');
            $table->foreign('town_id')->references('id')->on('towns');
            $table->string('Calle',40)->comment('Calle');
            $table->string('Indicaciones',300)->comment('Indicaciones adicionales');
            $table->integer('CP')->comment('Codigo Postal');
            $table->String('Telefono')->comment('Telefono');
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
        Schema::dropIfExists('direccions');
    }
}
