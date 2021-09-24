<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $table = 'habitacions';

    public function reservas(){
        return $this->hasMany(Reserva::class);
    }

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
}
