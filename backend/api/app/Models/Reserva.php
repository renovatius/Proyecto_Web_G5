<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table='reservas';
    
    public function clientes(){
        return $this->belongsTo(Clientes::class);
    }

    public function habitacion(){
        return $this->belongsTo(Habitacion::class);
    }


}
