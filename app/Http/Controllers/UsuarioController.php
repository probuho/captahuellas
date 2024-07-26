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
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'p00' => 'required|integer',
            'primer_nombre' => 'required|string|max:255',
            'primer_apellido' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'correo_corporativo' => 'required|email|max:255',
            'foto' => 'nullable|image|max:2048', // máximo 2MB
            'huella_dactilar' => 'nullable|file|max:2048' // máximo 2MB
        ]);

        // Crear un nuevo usuario
        $usuario = new Usuario($request->except(['foto', 'huella_dactilar']));

        // Manejar la carga de archivos
        if ($request->hasFile('foto')) {
            $usuario->foto = base64_encode(file_get_contents($request->file('foto')->getRealPath()));
        }

        if ($request->hasFile('huella_dactilar')) {
            $usuario->huella_dactilar = base64_encode(file_get_contents($request->file('huella_dactilar')->getRealPath()));
        }

        $usuario->save();

        return redirect()->route('usuarios.index')->with('mensaje', 'Usuario creado con éxito');
    }
}
