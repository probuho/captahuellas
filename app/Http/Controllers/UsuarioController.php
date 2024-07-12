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
    public function create()
    {
        return view('usuario.create');
    }

        public function store(Request $request)
    {
        $usuario = new Usuario($request->all());
        $usuario -> save ();
        return response() -> json($usuario);
         //return redirect()->route('usuarios.index');
        
    }

    // $usuario = new Usuario();
    // $usuario->primer_nombre = $request->usuario_id;
    // $usuario->primer_apellido = $request->estatus;
}