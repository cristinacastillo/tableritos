<?php

/**
 * Antonio J.Sánchez
 * curso 2019/20
 */

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Tablero;

class TableroController extends Controller
{

    /**
     * Obtiene un listado de todos los tableros almacenados
     * en la base de datos.
     *
     * @return
     */
    function list() {
        //$tableros = Tablero::all();
        //dd($tableros);

        //retornamos una respuesta con formato json
        return response()
            ->json(Tablero::all());

    }

    /**
     * Obtiene información sobre un determinado tablero.
     * @param  int $id
     * @return
     */
    public function info(int $id)
    {
        return response()
            ->json(Tablero::find($id));
    }

}
