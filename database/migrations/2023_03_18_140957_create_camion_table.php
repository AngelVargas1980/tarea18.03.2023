<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id('id_placa')->unique();
            $table->string( 'placa_camion', 6)->nullable();
            $table->string( 'marca', 45);
            $table->string( 'color', 25);
            $table->date( 'modelo');
            $table->integer('capacidad_toneladas');
            $table->string( 'transporte_codigo', 45)->unsigned();
            $table->timestamps();
            $table->foreign('transporte_codigo')->references('codigo')->on('transporte')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camion');
    }
}
