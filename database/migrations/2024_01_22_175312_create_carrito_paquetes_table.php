<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritoPaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito_paquetes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('carrito_id')->index();
            $table->bigInteger('paquete_id')->index();
            $table->bigInteger('cantidad')->unsigned();

            $table->timestamps();

            $table->foreign('carrito_id')->references('id')->on('carritos');
            $table->foreign('paquete_id')->references('id')->on('paquetes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrito_paquetes');
    }
}
