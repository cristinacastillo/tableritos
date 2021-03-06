<?php

/**
 * Antonio J.Sánchez
 * curso 2019/20
 */

namespace App\Http\Controllers;

use App\Models\Tablero;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableroController extends Controller
{
    /**
     * Muestra un listado con todos los tableros de la base
     * de datos.
     *
     * @return Illuminate\Support\Facades\View
     */
    public function index()
    {
        // obtenemos un listado de los tableros almacenados
        // en la base de datos.
        // ambas líneas son equivalentes
        //$tab = Tablero::all() ;
        //$tab = DB::table('tablero')->get() ;

        // indicamos el número de requistros que queremos ver
        $tab = DB::table('tablero')->paginate(5); // numeros
        //$tab = DB::table('tablero')->simplePaginate(5) ; // antes, despúes

        return view('tableros.index', ['tableros' => $tab]);
    }

    /**
     * Editamos los datos del tablero que se nos indica
     *
     * @param  Request $req
     * @return
     */
    public function edit(Request $req)
    {
        // realizamos la validación de los parámetros necesarios
        $req->validate([
            'id'  => 'integer|min:1|required',
            'nom' => 'string|max:150',
        ]);

        // buscamos el tablero
        $idt = $req->input('id');
        $tab = Tablero::find($idt);

        // si no tengo el parámetro NOM muestro la vista
        if (!$req->has('nom')) {
            return view('tableros.editar', ['tablero' => $tab]);
        }

        // en otro caso, modificamos el campo NOMBRE y guardar
        $tab->nombre = $req->input('nom');
        $tab->save();

        // redirigimos a la pantalla principal de tableros
        return redirect()->route('tablero.ver');
    }

    /**
     * Borramos el tablero indicado, si existe.
     *
     * @param  Request $req
     * @return
     */
    public function delete(Request $req)
    {
        if (!$req->has('id')) {
            return redirect('/');
        }

        // buscamos el tablero
        $idt = $req->input('id');
        $tab = Tablero::find($idt);

        // si el tablero no existe, regresamos con mensaje de error
        if (!$tab) {
            return redirect('/')->with('message', __('messages.notableros'));
        }

        // borramos y regresamos
        $tab->delete();
        return redirect('/');
    }

    /**
     * Añadimos un nuevo tablero.
     *
     * @param Request $req
     */
    public function add(Request $req)
    {

        //dd($req) ;

        // realizamos la validación del campo
        $req->validate([
            'nom' => 'string|max:150|filled',
        ]);

        // comprobar si existe el campo NOM
        if (!$req->has('nom')) {
            return view('tableros.add');
        }

        // creamos un tablero: ELOQUENT
        Tablero::create(['nombre' => $req->input('nom'),
            'fecha'                   => Carbon::now()]);

        // creamos el tablero: QUERY BUILDER
        // recuerda importar la clase, en caso necesario
        //
        // DB::table('tablero')->insert(['..' => '...', ...]) ;
        // DB::table('tablero')->insert(['..' => '...', ...], ['..' => '...', ...], ...) ;
        // DB::table(...)->insertOrIgnore(...)
        // DB::table(...)->insertGetId(['..' => '..', ...])

        //
        return redirect('/');
    }

    /**
     * Mostramos todas las notas del tablero indicado
     *
     * @param  Request $req
     * @return
     */
    public function view(Request $req)
    {
        // si no nos dan un ID para el tablero, volvemos a la página principal
        if (!$req->has('id')) {
            return redirect()->route('tablero.ver');
        }

        //
        $tab = Tablero::find($req->input('id'));

        // si el tablero no existe, volvemos a la página principal
        if (!$tab) {
            return redirect()->route('tablero.ver');
        }

        //
        return view('notas.ver', ['notas' => $tab->notas()]);
    }

    
}
