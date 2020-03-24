<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    //
    protected $table = 'nota' ;
    protected $primaryKey = 'idNot' ;

    /**
     * Devuelve el tablero al que pertenece una determinada nota
     */
    public function tablero()
    {
        // una NOTA pertenece a un tablero
    	return $this->belongsTo('App\Models\Tablero','idTab') ;
    }

    public function etiquetas()
    {
        // una NOTA pertenece a varias etiquetas
        // belongsToMany necesita varios parametros:
        // · Objeto con el que estamos relacionando a NOTA
        // · Tabla PIVOTE (nota_etiqueta)
        // · ID de la tabla NOTA
        // · ID de la tabla ETIQUETA
        return $this->belongsToMany('App\Models\Etiqueta',
                                    'nota_etiqueta','idNot','idTag') ;
    }

}
