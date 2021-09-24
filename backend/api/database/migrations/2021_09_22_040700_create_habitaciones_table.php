<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_hotel');
            $table->foreignId('id_tipo');
            $table->tinyInteger('piso');
            $table->tinyInteger('numero');
            $table->tinyInteger('precio');
            $table->boolean('minibar');
            $table->tinyInteger('capacidad');

            $table->foreign('id_hotel')->references('id')->on('hoteles');
            $table->foreign('id_tipo')->references('id')->on('tipo_habitaciones');

        });
    }

       public function down()
    {
        Schema::dropIfExists('habitaciones');
    }
}
