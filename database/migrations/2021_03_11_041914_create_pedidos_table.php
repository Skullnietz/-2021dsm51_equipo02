<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_de_realizacion')->comment('fecha de realizacion');
            $table->dateTime('fecha_estimada')->comment('fecha estimada');
            $table->dateTime('fecha_entrega')->comment('fecha de entrega');
            $table->decimal('subtotal',7,2)->comment('subtotal');
            $table->decimal('impuesto',7,2)->comment('impuesto');
            $table->decimal('total',7,2)->comment('total');
            $table->enum('estado',['Entregado','Retrasado','En Proceso','No Entragado'])->comment('estado');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('pedidos');
    }
}
