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
        $usuario->primer_nombre = $request->primer_nombre;
        $usuario->segundo_nombre = $request->segundo_nombre; // Asegúrate de tener este campo en tu formulario.
        $usuario->primer_apellido = $request->primer_apellido;
        $usuario->segundo_apellido = $request->segundo_apellido; // Asegúrate de tener este campo en tu formulario.
        $usuario->Direccion = $request->Direccion;
        $usuario->telefono = $request->telefono;
        $usuario->email = $request->correo;
        $usuario->gerencia_general = $request->gerencia_general; // Asegúrate de que el nombre de la columna en la base de datos coincida.
        if ($request->hasFile('huella_dactilar') && $request->file('huella_dactilar')->isValid()) {
            $usuario->huella_dactilar = file_get_contents($request->file('huella_dactilar')->path());
        }
        $usuario->fecha_ingreso = $request->fecha_ingreso;
        // Los campos `created_at` y `updated_at` se llenan automáticamente si estás usando Eloquent.
        $usuario->p00 = $request->p00;
        $usuario->correo_corporativo = $request->correo_corporativo;
        //$usuario->huella_dactilar = $request->huella_dactilar; // Asegúrate de manejar este campo correctamente según cómo captures la huella dactilar.

        $usuario->save();

        // Redirigir al usuario a alguna parte después de guardar, por ejemplo, a la lista de usuarios.
        return redirect()->route('usuarios.index');
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

