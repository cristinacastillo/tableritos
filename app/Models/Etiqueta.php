<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    //

    protected $table = 'etiqueta' ;
    protected $primaryKey = 'idTag' ;


    public function notas()
    {
        // una NOTA pertenece a varias etiquetas
        // belongsToMany necesita varios parametros:
        // · Objeto con el que estamos relacionando a NOTAS
        // · Tabla PIVOTE (nota_etiqueta)
        // · ID de la tabla ETIQUETA
        // · ID de la tabla NOTA
        return $this->belongsToMany('App\Models\Nota',
                                    'nota_etiqueta','idTag','idNot') ;
    }


}
