<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tablero extends Model
{
    // indicamos el nombre de la tabla
    protected $table = 'tablero';

    // modificamos la clave primaria por defecto
    protected $primaryKey = 'idTab';

    //
    protected $fillable  = ['nombre', 'fecha'];

    public $timestamps = false;

    /**
     */
    public function notas()
    {
        // un TABLERO tiene varias notass
        return $this->hasMany('App\Models\Nota', 'idTab');
    }
}
