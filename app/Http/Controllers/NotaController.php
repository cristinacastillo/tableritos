<?php

namespace App\Http\Controllers;

use App\Models\Tablero;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    //
    public function view(Request $req)
    {
        // obtengo el ID del tablero
        $idt = $req->input('id');

        // busco las notas asociadas al tablero
        $dta = Tablero::find($idt)
            ->notas()
            ->get();

        // devuelvo la vista con los datos
        return view('nota.main', ['dta' => $dta]);
    }
}
