<?php


namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }
    public function create(){
        return view('usuario.create');
    }
    public function store(Request $request)
    {
        $usuario = request()->all();
        return response()->json( $usuario );
    }    

}


// namespace App\Http\Controllers;

// use App\Models\Usuario;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\DB;

// class UsuarioController extends Controller
// {
//     public function index()
//     {
//         $usuarios = Usuario::all();
//         return view('usuarios.index', ['usuarios' => $usuarios]);
//     }
// }

