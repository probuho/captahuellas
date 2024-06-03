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
    $usuario = new Usuario();
    $usuario->p00 = $request->input('p00');
    $usuario->primer_nombre = $request->input('primer_nombre');
    $usuario->segundo_nombre = $request->input('segundo_nombre');
    $usuario->primer_apellido = $request->input('primer_apellido');
    $usuario->segundo_apellido = $request->input('segundo_apellido');
    $usuario->direccion = $request->input('direccion');
    $usuario->telefono = $request->input('telefono');
    $usuario->email = $request->input('email');
    $usuario->correo_corporativo = $request->input('correo_corporativo');
    $usuario->foto = $request->file('foto')->store('foto_usuarios','public');
    
    $usuario->save();

    return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente');
}
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         '' => 'required',
    //     ]);
    //     $usuario = new Usuario($request->all());
    //     return response()->json($usuario);
    //     //return redirect()->route('usuarios.index');

    // }

    // $usuario -> fotografia = $request->file('foto')->store('foto_usuarios','public');
}