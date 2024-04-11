<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodigoPromocionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigo_promocionals', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('codigo');
            $table->bigInteger('descuento');
            $table->date('fecha_ini');
            $table->date('fecha_fin');

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
        Schema::dropIfExists('codigo_promocionals');
    }
}
