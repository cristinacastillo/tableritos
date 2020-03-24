<?php

namespace App\Http\Controllers;

use App\Models\Tablero;
use Illuminate\Http\Request;

class TableroController extends Controller
{
    /**
     * Obtiene información del modelo sobre los
     * tableros y se los pasa a la vista
     *
     * @return Illuminate\Support\Facades\View
     */
    public function view()
    {
        // Solicitamos al modelo todos los tableros
        $datos = Tablero::all();

        //
        return view('tablero.main', ['tableros' => $datos]);
    }

    /**
     * Editamos los datos del tablero que se nos indica
     *
     * @param Request $req
     * @return [type]   [description]
     */
    public function edit(Request $req)
    {
        // OJO:
        // VAMOS A TENER EN CUENTA QUE SIEMPRE ME PASAN LOS DATOS QUE NECESITO!!!!
        $idt = $req->input('id');
        $tab = Tablero::find($idt);

        // si no tengo el parámetro NOM muestro la vista
        if (!$req->has('nom')) {
            return view('tablero.editar', ['tablero' => $tab]);
        }

        // en otro caso, modificamos el campo NOMBRE y guardar
        $tab->nombre = $req->input('nom');
        $tab->save();

        // redirigimos a la pantalla principal de tableros
        return redirect()->route('tablero.ver');
    }
}
