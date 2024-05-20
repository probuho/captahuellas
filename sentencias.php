sentencias

Laravel v11.6.0 // Laravel Installer 4.5.0
(PHP v8.2.4)
PHP 8.2.4 (cli) (built: Mar 14 2023 17:54:25) (ZTS Visual C++ 2019 x64)
Copyright (c) The PHP Group
Zend Engine v4.2.4, Copyright (c) Zend Technologies

------------------------------------------------------------------

VITE v5.2.10 ready in 2166 ms

➜ Local: http://localhost:5173/
➜ Network: use --host to expose
➜ press h + enter to show help

LARAVEL v11.6.0 plugin v1.0.2

➜ APP_URL: http://localhost

------------------------------------------------------------------

C:\Program Files\PostgreSQL\16
C:\Program Files\PostgreSQL\16\data
root pswd: soporte
puerto:5432
______________________________________________________________

CREATE DATABASE captahuellas;
CREATE USER huellero WITH PASSWORD 'soporte';
GRANT ALL PRIVILEGES ON DATABASE captahuellas TO huellero;

------------------------------------------------------------------
- Esta sentencia crea un directorio para el proyecto.

# composer create-project laravel/laravel captahuellas

- Esta sentencia utiliza el directorio ya existente

# composer create-project laravel/laravel C:\xampp\htdocs\captahuellas

- levantar dominio

php artisan serve

- Instala un paquete de composer que crea lo necesario para
la autenticacion

# composer require laravel/ui

- paso 1 :Instala bootstrap en el directorio del proyecto

# php artisan ui bootstrap

- paso 2 :al instalar bootstrap necesito tambien instalar esto:

# npm install && npm run dev
# npm run dev (Sirve para levantar el servicio completo)

- paso 3 :

# php artisan ui bootstrap --auth

- Paso 4:

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=captahuellas
DB_USERNAME=postgres
DB_PASSWORD=soporte

- Paso 5:

# npm run build

# Retazos

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Starter Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Starter Page</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

# Retazo de admin.blade.php

<div class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pagina principal</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Página principal</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->
    <div class="col-sm-6">
        <h1 class="m-0"></h1>
    </div>


    php artisan make:controller UsuarioController



Dashboard: La página principal actúa como un tablero de control central, presentando resúmenes visuales de la asistencia, informes rápidos y notificaciones críticas.

Registro de entrada y salida: 
    
    Captura de registros preciso de entrada y salida

Gestion de usuario: 
    
    nombre , apellido , cédula , cod de trabajador 

Gestion de roles: 

    Gestion de permisos, control de accesos y actualización basica de la información del talento humano (nombre, apellido, cédula, etc)

Generación de informe: 

    generar informes basados en los registros de entrada y salida del talento humano. 

Generación de Reportes: 
    
    creación de informes personalizados que detallan la asistencia y comportamiento del personal.

Control de Accesos: 

    Funcionalidad destinada a la administración de quiénes tienen permisos para acceder y registrar la entrada/salida del sistema. Incluye asignación de roles y restricción de privilegios.

Gestión de Ausencias: 

    Espacio para validar y gestionar las solicitudes de ausencia, notificaciones de permisos, vacaciones o reposos.


    # Retazo del controllador

class UsuarioController extends Controller
 {
     public function index()
     {
         $usuarios = Usuario::all();
         return view('usuarios.index', ['usuarios' => $usuarios]);
     }
 }

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }
}

# Retazo https://laravel.com/docs/11.x/urls#urls-for-named-routes

Route::get('/post/{post}', function (Post $post) {
    // ...
})->name('post.show');



PS C:\WINDOWS\system32> pg_dump -U postgres -d captahuellas -h localhost -p 5432 -F c -f respaldo_captahuellas.backup
Contraseña:
pg_dump: error: la consulta falló: ERROR:  permiso denegado a la secuencia failed_jobs_id_seq
pg_dump: detalle: La consulta era: SELECT last_value, is_called FROM public.failed_jobs_id_seq
PS C:\WINDOWS\system32>


pg_dump -U soporte -W -h localhost basename > basename.sql

pg_dump -U usuario -W -h host basename > /ruta/al/directorio/basename.sql


pg_dump -U postgres -d captahuellas -h localhost -p 5432 -F c -f C:\respaldo_captahuellas.backup







PS C:\xampp\htdocs\captahuellas> php artisan db:seed

   INFO  Seeding database.  


   Illuminate\Contracts\Container\BindingResolutionException 

  Target class [Database\Seeders\UserSeeder] does not exist. 

  at vendor\laravel\framework\src\Illuminate\Container\Container.php:906
    902▕
    903▕         try {
    904▕             $reflector = new ReflectionClass($concrete);
    905▕         } catch (ReflectionException $e) {
  ➜ 906▕             throw new BindingResolutionException("Target class [$concrete] does not exist.", 0, $e);
    907▕         }
    908▕
    909▕         // If the type is not instantiable, the developer is attempting to resolve
    910▕         // an abstract type such as an Interface or Abstract Class and there is

  1   vendor\laravel\framework\src\Illuminate\Container\Container.php:904
      ReflectionException::("Class "Database\Seeders\UserSeeder" does not exist")

  2   vendor\laravel\framework\src\Illuminate\Container\Container.php:904
      ReflectionClass::__construct("Database\Seeders\UserSeeder")


0000000000000000000000000000000000000000000000000000000000000000

me podrias ayudar a solucionar el error que me retorna al configurar los seeders y el factory por favor

PS C:\xampp\htdocs\captahuellas> php artisan db:seed

INFO Seeding database.

Database\Seeders\UsuarioSeeder ....................................................................................... RUNNING

BadMethodCallException

Call to undefined method App\Models\Usuario::factory()

at vendor\laravel\framework\src\Illuminate\Support\Traits\ForwardsCalls.php:67 63▕ * @throws \BadMethodCallException 64▕ */ 65▕ protected static function throwBadMethodCallException($method) 66▕ { ➜ 67▕ throw new BadMethodCallException(sprintf( 68▕ 'Call to undefined method %s::%s()', static::class, $method 69▕ )); 70▕ } 71▕ }

i Bad Method Call: Did you mean App\Models\Usuario::toArray() ?

1 vendor\laravel\framework\src\Illuminate\Support\Traits\ForwardsCalls.php:36 Illuminate\Database\Eloquent\Model::throwBadMethodCallException("factory")

2 vendor\laravel\framework\src\Illuminate\Database\Eloquent\Model.php:2340 Illuminate\Database\Eloquent\Model::forwardCallTo(Object(Illuminate\Database\Eloquent\Builder), "factory", [])

PS C:\xampp\htdocs\captahuellas>0000000000000000000000000000000000000000000000000000000000000000

{{-- <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script> --}}

================================================================================

Route::get('/miembros/create',[App\Http\Controllers\UsuarioController::class,'create']);

==================================================================================================


tengo una duda si tengo un formulario de registro y no quiero integrar al codigo las opciones de la lista desplegable sino que quiero 
que la lista desplegable busque las opciones directamente de hacer un llamado a una tabla en la misma bd del proyecto eso se puede hacer?

Respuesta

Sí, es posible cargar dinámicamente las opciones de una lista desplegable (select) en un formulario de registro directamente desde una 
tabla en la base de datos de tu proyecto Laravel. Esto se puede lograr utilizando JavaScript para realizar una petición AJAX al servidor 
y obtener los datos de la tabla en la base de datos.

Aquí te muestro los pasos generales para lograr esto:


Crear una Ruta en Laravel:
Define una ruta en tu archivo de rutas (web.php) que maneje la petición para obtener las opciones de la lista desplegable 
desde la base de datos.

Crear un Controlador:
Crea un controlador en Laravel que maneje la lógica para obtener los datos de la tabla en la base de datos y devolverlos en 
formato JSON.

Crear una Función JavaScript:
En tu vista donde se encuentra el formulario de registro, crea una función JavaScript que realice una petición AJAX a la ruta 
que creaste en el paso 1 para obtener los datos de la tabla.

Actualizar la Lista Desplegable:
Una vez que obtengas los datos de la tabla en la base de datos a través de la petición AJAX, actualiza dinámicamente las opciones 
de la lista desplegable en tu formulario de registro.Este enfoque te permitirá cargar las opciones de la lista desplegable en 
tiempo real desde la base de datos sin necesidad de integrarlas directamente en el código HTML. Es una forma dinámica y 
escalable de manejar las opciones de selección en tus formularios.
Si necesitas más detalles sobre cómo implementar este proceso en tu proyecto Laravel, no dudes en pedir más orientación o 
detalles específicos. ¡Estoy aquí para ayudarte en lo que necesites!

=====================================================================================================

voy a empezar a utilizar la create.blade.php en la ruta resources/views/usuarios pero me surgio una funcionalidad es posible que pueda 
utilizar AJAX de jQuery para poder hacer una carga dinamica de los datos mediante una peticion a la base de datos del proyecto , 
(aun no tengo nada creado, estoy analizando que pasos debo seguir y como ejecutarlos y en que archivos y rutas debo agregar el codigo)

Para implementar una carga dinámica de datos mediante AJAX de jQuery en tu archivo create.blade.php en la ruta resources/views/usuarios,
necesitarás seguir varios pasos y trabajar con varios archivos en tu proyecto Laravel. A continuación, te detallo los pasos y en qué archivos 
y rutas debes agregar el código:

Incluir jQuery en tu proyecto: Asegúrate de que jQuery esté incluido en tu proyecto. Puedes hacerlo agregándolo en tu layout principal (por ejemplo, layouts/admin.blade.php) si aún no está incluido.

<!-- En tu archivo layouts/admin.blade.php -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
Crear la ruta para la petición AJAX: Necesitas definir una ruta en routes/web.php que maneje la petición AJAX.

// En tu archivo routes/web.php
use App\Http\Controllers\TuController; // Asegúrate de usar el namespace correcto

Route::post('/ruta-para-ajax', [TuController::class, 'metodoParaAjax'])->name('nombre.ruta.ajax');
Crear el método en el controlador: En el controlador que manejará la petición (puede ser UsuarioController o cualquier otro que elijas), crea el método que responderá a la petición AJAX.

// En tu controlador, por ejemplo, app/Http/Controllers/UsuarioController.php
public function metodoParaAjax(Request $request)
{
    // Lógica para obtener los datos de la base de datos
    // Por ejemplo, obtener usuarios: $usuarios = Usuario::all();
    // Retorna una respuesta JSON
    return response()->json(['usuarios' => $usuarios]);
}
Agregar el código AJAX en tu vista create.blade.php: En tu archivo create.blade.php, agrega el código JavaScript para realizar la petición AJAX. Asegúrate de hacer la petición al endpoint correcto y de manejar la respuesta adecuadamente.

<!-- En tu archivo resources/views/usuarios/create.blade.php -->
<script>
$(document).ready(function() {
    $.ajax({
        url: "{{ route('nombre.ruta.ajax') }}",
        type: "POST",
        data: {
            // Si necesitas enviar datos a tu servidor
            _token: "{{ csrf_token() }}", // CSRF token requerido por Laravel para peticiones POST
        },
        success: function(response) {
            console.log(response); // Aquí manejas la respuesta, por ejemplo, cargar los datos en tu vista
        },
        error: function(xhr) {
            // Manejo del error
        }
    });
});
</script>
Asegúrate de tener CSRF token disponible: Para las peticiones POST, Laravel requiere un CSRF token para proteger contra ataques de tipo CSRF. Asegúrate de incluir el token en tu petición AJAX como se muestra en el ejemplo anterior.

Siguiendo estos pasos, podrás realizar una carga dinámica de datos mediante una petición AJAX a la base de datos de tu proyecto Laravel desde la vista create.blade.php.

=====================================================================================================

p00
primer_nombre
segundo_nombre
primer_apellido
segundo_apellido
direccion
telefono
email_corporativo
gerencia_general
gerencia_lineal
coordinacion
foto
huella_dactilar

=====================================================================================================


Gerencia General de Soporte TI

    Gerencia de Soporte de Plataformas, Facturacin y Tasacion TI
        
        Coordinacion de Plataforma Postpago
        Coordinacion de Plataforma de Atención al Cliente

    Gerencia de Soporte Plataformas de Servicios TI

        Coordinacion de Mediación
        Coordinacion de Aprovisionamiento
        Coordinacion de Interconexion
        Coordinacion de Mensajeria
    
    Gerencia de Soporte Aplicaciones y Servicios TI

        Coordinacion de Soporte de aplicaciones para Gestion de Clientes
        Coordinacion de Integración de Aplicaciones de Saldos y Consumos
        Coordinacion de Soporte para la Gestion Empresarial

    Gerencia de Gestion de Produccion TI

        Coordinacion de Procesos de Tasacion
        Coordinacion de Procesos del negocio
        Coordinacion de Centro de Operaciones

    Gerencia de Gestion de Usuarios y Soporte de Equipos TI

        Coordinacion de Telefonia   
        Coordinacion de Redes
        Coordinacion de Soporte de Campos
        Coordinacion de Laboratorio e Investigacion

Gerencia de Soporte de Plataformas Facturacion y Tasacion TI
Gerencia de Soporte Plataformas de Servicios TI
Gerencia de Soporte Aplicaciones y Servicios TI
Gerencia de Gestion de Produccion TI
Gerencia de Gestion de Usuarios y Soporte de Equipos TI


DELETE FROM sistemacaptahuellas.gerencia_general
WHERE id IN (
SELECT id FROM (SELECT id,ROW_NUMBER() OVER (PARTITION BY nombre ORDER BY id) AS rn
FROM sistemacaptahuellas.gerencia_general    ) 
t WHERE rn > 1);

CREATE TABLE sistemacaptahuellas.coordinacion (
    id SERIAL,
    GG
)


====================================================================================================

estoy reformando la tabla trabajadores como habiamos acordado para poder hacer el ajuste a los datos que se van a ingresar ahora bien quiero que me ayudes a establecer los datos que se van a registrar posteriormente.

id 
huella[PK]
p00 [FK]
primer_nombre
segundo_nombre
primer_apellido
segundo_apellido
telefono
correo_corporativo
gerencia_general
gerencia
coordinacion
created_at
update_at

============================================================================================================


Backup create.blade.php

@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3" style="margin-left: 20px">
        <h1>Agregar nuevo...</h1>
    </div>
    <div class="content" style="margin-left: 20px">
        <div class="row">
            <div class="col-md-11">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><b>Creacion</b></h3>
                    </div>
                    <div class="card-body" style="...">
                        <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">P00</label><b>*</b>
                                        <input type="number" class="form-control" id="id" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Primer Nombre</label>
                                        <input type="text" class="form-control" id="primer_nombre" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Segundo Nombre</label>
                                        <input type="text" class="form-control" id="segundo_nombre">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Primer Apellido</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Segundo Apellido</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Dirección</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Telefono</label>
                                        <input type="tel" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Correo</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Correo laboral</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Huella dactilar</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Fecha de registro</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <a href="" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-primary"> Guardar</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <a href="">Enviar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection()

===========================================================================================================================


Attribute	Description

checked	  : Specifies that an input field should be pre-selected when the page loads (for type="checkbox" or type="radio")
disabled  :	Specifies that an input field should be disabled
max       :	Specifies the maximum value for an input field
maxlength :	Specifies the maximum number of character for an input field
min	      : Specifies the minimum value for an input field
pattern	  : Specifies a regular expression to check the input value against
readonly  :	Specifies that an input field is read only (cannot be changed)
required  :	Specifies that an input field is required (must be filled out)
size      :	Specifies the width (in characters) of an input field
step      :	Specifies the legal number intervals for an input field
value     : Specifies the default value for an input field




columnas de la tabla trabajadores

name="id"






name="email"
name="gerencia_general"
name="Foto"

name="update_at"
name="created_at"
name="p00"



