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
