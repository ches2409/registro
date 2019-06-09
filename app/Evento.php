<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = ['evento'];

    public function participantes(){
        return $this-> hasMany(Participante::class);
    }

    public function setAttribute($evento, $value) {
        $this->attributes[$evento] = ucwords($value);
    }
}
