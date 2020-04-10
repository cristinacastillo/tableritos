<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Usuario;



class UsuarioController extends Controller
{
    //
    public function index()
    {
    	$users = Usuario::all() ;
    	return view('usuarios.index', ['usuarios' => $users]) ;
    }

    public function view(Request $req, Usuario $user)
    {
    	return view('usuarios.ver', ['usuario' => $user]) ;
    }
}
