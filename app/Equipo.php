<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = ['equipo', 'descripcion'];

    public function participantes(){
        return $this-> hasMany(Participante::class);
    }
}
