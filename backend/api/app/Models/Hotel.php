<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table='hotels';
    
    public function habitaciones(){
        return $this->hasMany(Habitacion::class);
    }
    
}
