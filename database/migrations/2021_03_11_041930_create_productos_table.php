<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->string('producto',45)->comment('producto');
            $table->decimal('costo', 10,2)->comment('costo');
            $table->integer('existencias')->comment('existencias');
            $table->enum('categoria',['Dispositivo','Componente','Paquete'])->comment('categoria');
            $table->string('img')->comment('imagen');
            $table->string('descripcion',400)->comment('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
