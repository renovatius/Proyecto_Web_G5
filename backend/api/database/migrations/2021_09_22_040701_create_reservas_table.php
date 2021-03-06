<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
 
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('doc_cliente', 10);
            $table->foreignId('id_habitacion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->tinyInteger('huespedes');

            $table->foreign('doc_cliente')->references('doc')->on('clientes');
            $table->foreign('id_habitacion')->references('id')->on('habitaciones');
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
