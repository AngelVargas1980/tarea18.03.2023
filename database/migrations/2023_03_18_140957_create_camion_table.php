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
            $table->id();
            $table->integer('id_placa', 75)->unique();
            $table->string( 'placa_camion', 6);
            $table->string( 'marca', 45);
            $table->string( 'color', 25);
            $table->date( 'modelo', 75);
            $table->integer( 'capacidad_toneladas', 15);
            $table->string( 'transporte_codigo', 15);
            $table->timestamps();


            Schema::create('proveedor', function (Blueprint $table) {
                $table->id();

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
        Schema::dropIfExists('camion');
    }
}
