<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comprobante');
            $table->string('nombre');
            $table->string('descripcion');
            $table->double('precio',5,2);
            $table->string('folio');
            $table->bigInteger('cantidad');
            $table->bigInteger('paquete_id');
            $table->bigInteger('pedido_id');

            $table->timestamps();

            $table->foreign('paquete_id')->references('id')->on('paquetes');
            $table->foreign('pedido_id')->references('id')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_pedidos');
    }
}
