<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $fillable = ['nombre', 'apellido', 'documento', 'telefono', 'direccion', 'email', 'localidad_id', 'sexo', 'fecNacimiento', 'profesion', 'equipo_id', 'evento_id'];

    public function evento(){
    return $this-> belongsTo(Evento::class);
    }

    public function localidad(){
        return $this-> belongsTo(Localidad::class);
    }

    public function equipo(){
        return $this-> belongsTo(Equipo::class);
    }
    public function setAttribute($nombre, $value) {
        $this->attributes[$nombre] = ucwords($value);
    }
    public function setAttributeApellido($apellido, $value) {
        $this->attributes[$apellido] = ucwords($value);
    }
    public function setAttributeDir($direccion, $value) {
        $this->attributes[$direccion] = strtoupper($value);
    }
}
