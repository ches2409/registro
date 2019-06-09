<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'localidades';
    protected $fillable = ['localidad'];

    public function participantes(){
        return $this-> hasMany(Participante::class);
    }
}
